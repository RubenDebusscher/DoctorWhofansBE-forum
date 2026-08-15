<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\controller;

class ucp_controller
{
	protected $auth;
	protected $config;
	protected $db;
	protected $phpbb_dispatcher;
	protected $user;
	protected $template;
	protected $request;
	protected $language;
	protected $phpbb_root_path;
	protected $php_ext;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\event\dispatcher_interface $phpbb_dispatcher,
		\phpbb\user $user,
		\phpbb\template\template $template,
		\phpbb\request\request $request,
		\phpbb\language\language $language,
		$phpbb_root_path,
		$php_ext
	)
	{
		$this->auth					= $auth;
		$this->config				= $config;
		$this->db					= $db;
		$this->phpbb_dispatcher		= $phpbb_dispatcher;
		$this->user					= $user;
		$this->template				= $template;
		$this->request				= $request;
		$this->language				= $language;
		$this->phpbb_root_path		= $phpbb_root_path;
		$this->php_ext				= $php_ext;
	}

	public function dsgvo_overview ()
	{
		$this->language->add_lang('ucp_overview', 'chris1278/dsgvo');
	}

	public function dsgvo_profile_download ()
	{
		$this->language->add_lang('ucp_profil_donwload', 'chris1278/dsgvo');

		if ($this->request->is_set_post('prof-down'))
		{
			if (!$this->auth->acl_get('u_dsgvo_profile_download'))
			{
				trigger_error ($this->language->lang('PROFIL_DOWNLOAD_NOT_ALLOWED', append_sid("{$this->phpbb_root_path}ucp.$this->php_ext", 'i=-chris1278-dsgvo-ucp-main_module&amp;mode=profile_download')));
			}

			$sql = 'SELECT user_id, user_ip, user_regdate, username, user_email, user_lastvisit, user_posts, user_lang, user_timezone, user_dateformat,
					user_avatar, user_sig, user_jabber
				FROM ' .  USERS_TABLE . '
				WHERE user_id = ' . (int) $this->user->data['user_id'];
			$result = $this->db->sql_query($sql);
			$user_row = $this->db->sql_fetchrow($result);

			$user_row['user_regdate'] = $this->user->format_date($user_row['user_regdate']);
			$user_row['user_lastvisit'] = $this->user->format_date($user_row['user_lastvisit']);

			$sql = 'SELECT *
				FROM ' .  PROFILE_FIELDS_DATA_TABLE . '
				WHERE user_id = ' . (int) $this->user->data['user_id'];
			$result = $this->db->sql_query($sql);
			$profile_fields_row = $this->db->sql_fetchrow($result);
			$profile_fields_row = is_array($profile_fields_row) ? $profile_fields_row : [];

			$sql = 'SELECT session_id, session_last_visit, session_ip, session_browser
				FROM ' .  SESSIONS_TABLE . '
				WHERE session_user_id = ' . (int) $this->user->data['user_id'];
			$result = $this->db->sql_query($sql);
			$session_row = $this->db->sql_fetchrow($result);

			$session_row['session_last_visit'] = $this->user->format_date($session_row['session_last_visit']);

			$data = array_merge($user_row, $session_row, $profile_fields_row);
			/**
			 * Add or modify user data in chris1278 dsgvo/gdpr private downloads extension
			 *
			 * @event chris1278.dsgvo.dsgvo_profile_download
			 * @var    array	data		The user data row
			 * @since 1.1.0
			 */

			$vars = ['data'];
			extract($this->phpbb_dispatcher->trigger_event('chris1278.dsgvo.dsgvo_profile_download', compact($vars)));

			header("Content-type: text/csv");
			header("Content-Disposition: attachment; filename=dsgvo_my_profile_data.csv");
			header("Pragma: no-cache");
			header("Expires: 0");

			$header		= [];
			$content	= [];

			foreach ($data as $name => $value)
			{
				if (!empty($value))
				{
					$header[] = $name;
					$content[] = $this->escape($value);
				}
			}

			var_export(implode(', ', $header) . "\n" );
			var_export(implode(', ', $content));
			exit_handler();
		}

		$dsgvo_overview_info	= append_sid("{$this->phpbb_root_path}ucp.$this->php_ext", 'i=-chris1278-dsgvo-ucp-main_module&amp;mode=dsgvo_overview');

		$this->template->assign_vars([
			'DSGVO_LANG_OVERVIEW'			=> $this->language->lang('DSGVO_PROFILE_DOWNLOAD_INFO', $dsgvo_overview_info),
			'DSGVO_PROFILE_DOWNLOAD'		=> $this->auth->acl_get('u_dsgvo_profile_download'),
		]);
	}

	public function dsgvo_posts_download ()
	{
		$this->language->add_lang('ucp_data_download', 'chris1278/dsgvo');

		if ($this->request->is_set_post('post-down'))
		{
			if (!$this->auth->acl_get('u_dsgvo_posts_download'))
			{
				trigger_error ($this->language->lang('DATA_DOWNLOAD_NOT_ALLOWED', append_sid("{$this->phpbb_root_path}ucp.$this->php_ext", 'i=-chris1278-dsgvo-ucp-main_module&amp;mode=data_download')));
			}
			header("Content-type: text/csv");
			header("Content-Disposition: attachment; filename=dsgvo_my_post_data.csv");
			header("Pragma: no-cache");
			header("Expires: 0");

			$fields = 'post_id, topic_id, forum_id, poster_ip, post_time, post_subject';

			if ($this->config['dsgvo_post_format'])
			{
				$fields .= ', post_text';
			}

			var_export($fields . "\n");

			$sql_and = '';

			if ($this->config['dsgvo_post_read'])
			{
				$forum_ids = array_keys($this->auth->acl_getf('f_read', true));
				$sql_and .= ' AND ' . $this->db->sql_in_set('forum_id', $forum_ids);
			}

			$post_visibility = [ITEM_APPROVED];

			if ($this->config['dsgvo_post_unapproved'])
			{
				$post_visibility[] =  ITEM_UNAPPROVED;
				$post_visibility[] =  ITEM_REAPPROVE;
			}

			if ($this->config['dsgvo_post_deleted'])
			{
				$post_visibility[] =  ITEM_DELETED;
			}

			$sql_and .= ' AND ' . $this->db->sql_in_set('post_visibility', $post_visibility);

			$sql = 'SELECT ' . $fields . '
				FROM ' .  POSTS_TABLE . '
				WHERE poster_id = ' . (int) $this->user->data['user_id'] .
				$sql_and;
			$result = $this->db->sql_query($sql);
			while ($row = $this->db->sql_fetchrow($result))
			{
				if ($this->config['dsgvo_post_format'])
				{
					$row['post_text'] = $this->escape($row['post_text']);
				}
				$row['post_subject'] = $this->escape($row['post_subject']);
				$row['post_time'] = '"' . $this->user->format_date($row['post_time']) . '"';
				var_export(implode(', ', $row) . "\n");
			}
			exit_handler();
		}

		$dsgvo_overview_info	= append_sid("{$this->phpbb_root_path}ucp.$this->php_ext", 'i=-chris1278-dsgvo-ucp-main_module&amp;mode=dsgvo_overview');

		$this->template->assign_vars([
		'FORMAT_OF_POST'				=> $this->config['dsgvo_post_format'],
		'DSGVO_POSTS_DOWNLOAD'			=> $this->auth->acl_get('u_dsgvo_posts_download'),
		'DSGVO_LANG_OVERVIEW'			=> $this->language->lang('DSGVO_DATA_DOWNLOAD_INFO', $dsgvo_overview_info),
		]);
	}

	private function escape($data)
	{
		if (substr_count($data, '"'))
		{
			$data = str_replace('"', '""', $data);
		}
		return '"' . $data . '"';
	}

}
