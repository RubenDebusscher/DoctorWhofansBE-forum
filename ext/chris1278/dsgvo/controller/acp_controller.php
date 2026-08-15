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

class acp_controller
{
	protected $config;
	protected $language;
	protected $log;
	protected $request;
	protected $template;
	protected $user;
	protected $u_action;

	public function __construct(
		\phpbb\extension\manager $ext_manager,
		\phpbb\config\config $config,
		\phpbb\language\language $language,
		\phpbb\log\log $log,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user
	)
	{
		$this->md_manager 			= $ext_manager->create_extension_metadata_manager('chris1278/dsgvo');
		$this->config				= $config;
		$this->language				= $language;
		$this->log					= $log;
		$this->request				= $request;
		$this->template				= $template;
		$this->user					= $user;
	}

	public function display_options()
	{
		$ext_display_name 			= $this->md_manager->get_metadata('display-name');
		$ext_display_ver 			= $this->md_manager->get_metadata('version');
		$ext_lang_min_ver 			= $this->md_manager->get_metadata()['extra']['lang-min-ver'];
		$lang_ver 					= ($this->language->lang('DSGVO_LANG_EXT_VER') !== 'DSGVO_LANG_EXT_VER') ? $this->language->lang('DSGVO_LANG_EXT_VER') : '0.0.0';
		$notes 						= '';
		$this->language->add_lang('acp_common', 'chris1278/dsgvo');
		add_form_key('chris1278_dsgvo_acp');
		$errors = [];

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('chris1278_dsgvo_acp'))
			{
				$errors[] = $this->language->lang('FORM_INVALID');
			}

			if (empty($errors))
			{
				$this->config->set('dsgvo_post_format', $this->request->variable('dsgvo_post_format', 0));
				$this->config->set('dsgvo_post_read', $this->request->variable('dsgvo_post_read', 0));
				$this->config->set('dsgvo_post_unapproved', $this->request->variable('dsgvo_post_unapproved', 0));
				$this->config->set('dsgvo_post_deleted', $this->request->variable('dsgvo_post_deleted', 0));
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_ACP_DSGVO_SETTINGS');
				trigger_error($this->language->lang('ACP_DSGVO_SETTING_SAVED') . adm_back_link($this->u_action));
			}
		}

		if (!phpbb_version_compare($lang_ver, $ext_lang_min_ver, '>='))
		{
			$this->add_note($notes, $this->language->lang('DSGVO_MSG_LANGUAGEPACK_OUTDATED'));
		}

		$s_errors = !empty($errors);

		$this->template->assign_vars([
			'S_ERROR'									=> $s_errors,
			'ERROR_MSG'									=> $s_errors ? implode('<br />', $errors) : '',
			'DSGVO_POST_FORMAT'							=> $this->config['dsgvo_post_format'],
			'DSGVO_POST_READ'							=> $this->config['dsgvo_post_read'],
			'DSGVO_POST_UNAPPROVED'						=> $this->config['dsgvo_post_unapproved'],
			'DSGVO_POST_DELETED'						=> $this->config['dsgvo_post_deleted'],
			'DSGVO_EXT_NAME'							=> $ext_display_name,
			'DSGVO_EXT_VER'								=> $ext_display_ver,
			'DSGVO_NOTES'								=> $notes,
			'U_ACTION'									=> $this->u_action,
		]);
	}

	private function add_note(string &$notes, $msg)
	{
		$notes .= (($notes != '') ? "\n" : "") . sprintf('<p>%s</p>', $msg);
	}

	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
