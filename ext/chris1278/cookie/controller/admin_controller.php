<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\controller;

class admin_controller
{
	protected $extension_manager;
	protected $db;
	protected $path_helper;
	protected $config;
	protected $config_text;
	protected $language;
	protected $log;
	protected $request;
	protected $template;
	protected $user;
	protected $root_path;
	protected $php_ext;
	protected $script_table;
	protected $u_action;

	public function __construct(
		\phpbb\extension\manager $ext_manager,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\path_helper $path_helper,
		\phpbb\config\config $config,
		\phpbb\config\db_text $config_text,
		\phpbb\language\language $language,
		\phpbb\log\log $log,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user,
		$root_path,
		$php_ext,
		$script_table
	)
	{
		$this->script_table			= $script_table;
		$this->db					= $db;
		$this->ext_manager			= $ext_manager;
		$this->md_manager 			= $ext_manager->create_extension_metadata_manager('chris1278/cookie');
		$this->admin_path 			= $path_helper->get_phpbb_root_path() . $path_helper->get_adm_relative_path();
		$this->config				= $config;
		$this->config_text			= $config_text;
		$this->language				= $language;
		$this->log					= $log;
		$this->request				= $request;
		$this->template				= $template;
		$this->user					= $user;
		$this->php_ext				= $php_ext;
		$this->root_path			= $root_path;
	}

	public function display_general()
	{
		$ext_display_ver 			= $this->md_manager->get_metadata('version');
		$ext_lang_min_ver 			= $this->md_manager->get_metadata()['extra']['lang-min-ver'];
		$ext_display_name 			= $this->md_manager->get_metadata('display-name');
		$ext_display_ver 			= $this->md_manager->get_metadata('version');
		$lang_ver 					= ($this->language->lang('CM_LANG_EXT_VER') !== 'CM_LANG_EXT_VER') ? $this->language->lang('CM_LANG_EXT_VER') : '0.0.0';
		$bannerinfo					= append_sid("{$this->admin_path}index.$this->php_ext", '&i=acp_board&mode=cookie');
		$notes 						= '';
		$this->language->add_lang('acp_cookie_general', 'chris1278/cookie');
		add_form_key('cookie_general');
		$errors = [];

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('cookie_general'))
			{
				$errors[] = $this->language->lang('FORM_INVALID');
			}

			if (empty($errors))
			{
				$this->config->set('window_position', $this->request->variable('window_position', 0));
				$this->config->set('name_of_cookie', $this->request->variable('name_of_cookie', ''));
				$this->config->set('klaro_div_container', $this->request->variable('klaro_div_container', ''));
				$this->config->set('klaro_hidden_windows', $this->request->variable('klaro_hidden_windows', 0));
				$this->config->set('html_code_processing', $this->request->variable('html_code_processing', 0));
				$this->config->set('group_formation', $this->request->variable('group_formation', 0));
				$this->config->set('cookie_icon_selection', $this->request->variable('cookie_icon_selection', 0));
				$this->config->set('save_all_button', $this->request->variable('save_all_button', 0));
				$this->config->set('cookie_runtime', $this->request->variable('cookie_runtime', ''));
				$this->config->set('show_decline_button', $this->request->variable('show_decline_button', 0));
				$this->config->set('to_the_cookie_settings', $this->request->variable('to_the_cookie_settings', 0));
				$this->config->set('window_fix_in_the_middle', $this->request->variable('window_fix_in_the_middle', 0));
				$this->config->set('klaro_note', $this->request->variable('klaro_note', 0));
				$this->config->set('storage_version', $this->request->variable('storage_version', '', true));
				$this->config->set('klarostylecolor', $this->request->variable('klarostylecolor', '', true));
				$this->config->set('klarostyleposition', $this->request->variable('klarostyleposition', '', true));
				$this->config->set('klarostylewidth', $this->request->variable('klarostylewidth', '', true));
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_ACP_COOKIE_GENERAL');
				trigger_error($this->language->lang('ACP_COOKIE_SETTING_SAVED') . adm_back_link($this->u_action));
			}
		}

		$s_errors = !empty($errors);

		if (!phpbb_version_compare($lang_ver, $ext_lang_min_ver, '>='))
		{
			$this->add_note($notes, $this->language->lang('CM_MSG_LANGUAGEPACK_OUTDATED'));
		}

		$this->template->assign_vars([
			'S_ERROR'						=> $s_errors,
			'ERROR_MSG'						=> $s_errors ? implode('<br>', $errors) : '',
			'CM_NOTES'						=> $notes,
			'CM_EXT_NAME'					=> $ext_display_name,
			'CM_EXT_VER'					=> $ext_display_ver,
			'COOKIE_WARN_INFO'				=> sprintf($this->language->lang('COOKIE_WARN'), $bannerinfo),
			'TEST1'							=> $this->config_text->get('test'),
			'WINDOW_POSITION'				=> $this->config['window_position'],
			'NAME_OF_COOKIE'				=> $this->config['name_of_cookie'],
			'KLARO_DIV_CONTAINER'			=> $this->config['klaro_div_container'],
			'KLARO_HIDDEN_WINDOWS'			=> $this->config['klaro_hidden_windows'],
			'HTML_CODE_PROCESSING'			=> $this->config['html_code_processing'],
			'GROUP_FORMATION'				=> $this->config['group_formation'],
			'COOKIE_ICON_SELECTION'			=> $this->config['cookie_icon_selection'],
			'SAVE_ALL_BUTTON'				=> $this->config['save_all_button'],
			'COOKIE_RUNTIME'				=> $this->config['cookie_runtime'],
			'SHOW_DECLINE_BUTTON'			=> $this->config['show_decline_button'],
			'TO_THE_COOKIE_SETTINGS'		=> $this->config['to_the_cookie_settings'],
			'WINDOW_FIX_IN_THE_MIDDLE'		=> $this->config['window_fix_in_the_middle'],
			'KLARO_NOTE'					=> $this->config['klaro_note'],
			'STORAGE_VERSION'				=> $this->config['storage_version'],
			'KLAROSTYLECOLOR'				=> $this->config['klarostylecolor'],
			'KLAROSTYLEPOSITION'			=> $this->config['klarostyleposition'],
			'KLAROSTYLEWIDTH'				=> $this->config['klarostylewidth'],
			'U_ACTION'						=> $this->u_action,

		]);
	}

	private function add_note(string &$notes, $msg)
	{
		$notes .= (($notes != '') ? "\n" : "") . sprintf('<p>%s</p>', $msg);

	}

	public function display_switches()
	{
		$ext_display_name = $this->md_manager->get_metadata('display-name');
		$this->language->add_lang('acp_cookie_switches', 'chris1278/cookie');
		$own_scipts_header				= generate_board_url() . '/ext/chris1278/styles/all/template/own_scipts_header.html';
		$own_scipts_footer				= generate_board_url() . '/ext/chris1278/styles/all/template/own_scipts_footer.html';
		add_form_key('cookie_switches');
		$errors = [];

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('cookie_switches'))
			{
				$errors[] = $this->language->lang('FORM_INVALID');
			}

			if (empty($errors))
			{
				$this->update_script_value('gaos_pos1', $this->request->variable('gaos_pos1', '', true));
				$this->update_script_value('gaos_pos2', $this->request->variable('gaos_pos2', '', true));
				$this->update_script_value('matomo_pos1', $this->request->variable('matomo_pos1', '', true));
				$this->update_script_value('matomo_pos2', $this->request->variable('matomo_pos2', '', true));
				$this->update_script_value('goads_pos1', $this->request->variable('goads_pos1', '', true));
				$this->update_script_value('goads_pos2', $this->request->variable('goads_pos2', '', true));
				$this->update_script_value('gomaps_pos1', $this->request->variable('gomaps_pos1', '', true));
				$this->update_script_value('gomaps_pos2', $this->request->variable('gomaps_pos2', '', true));
				$this->config->set('cookie_impressum_intern_extern', $this->request->variable('cookie_impressum_intern_extern', '', true));
				$this->config->set('cookie_impressum_link_extern', $this->request->variable('cookie_impressum_link_extern', '', true));
				$this->config->set('youtube_bbcode_switch', $this->request->variable('youtube_bbcode_switch', 0));
				$this->config->set('google_translator_switch', $this->request->variable('google_translator_switch', 0));
				$this->config->set('ganalytics_own_script', $this->request->variable('ganalytics_own_script', 0));
				$this->config->set('google_analytics_no_tm_switch', $this->request->variable('google_analytics_no_tm_switch', 0));
				$this->config->set('google_analytics_id', $this->request->variable('google_analytics_id', ''));
				$this->config->set('vimeo_bbcode_switch', $this->request->variable('vimeo_bbcode_switch', 0));
				$this->config->set('spotify_bbcode_switch', $this->request->variable('spotify_bbcode_switch', 0));
				$this->config->set('matomo_own_script', $this->request->variable('matomo_own_script', 0));
				$this->config->set('matomo_switch', $this->request->variable('matomo_switch', 0));
				$this->config->set('matomo_url', $this->request->variable('matomo_url', ''));
				$this->config->set('matomo_side_id', $this->request->variable('matomo_side_id', '1'));
				$this->config->set('matomo_in_out', $this->request->variable('matomo_in_out', 0));
				$this->config->set('google_webfont_switch', $this->request->variable('google_webfont_switch', 0));
				$this->config->set('google_adsense_switch', $this->request->variable('google_adsense_switch', 0));
				$this->config->set('google_maps_switch', $this->request->variable('google_maps_switch', 0));
				$this->config->set('amazon_switch', $this->request->variable('amazon_switch', 0));
				$this->config->set('data_name_googleanalytics', $this->request->variable('data_name_googleanalytics', ''));
				$this->config->set('data_name_googleadsense', $this->request->variable('data_name_googleadsense', ''));
				$this->config->set('data_name_googletranslate', $this->request->variable('data_name_googletranslate', ''));
				$this->config->set('data_name_googlewebfont', $this->request->variable('data_name_googlewebfont', ''));
				$this->config->set('data_name_googlemaps', $this->request->variable('data_name_googlemaps', ''));
				$this->config->set('data_name_amazon', $this->request->variable('data_name_amazon', ''));
				$this->config->set('data_name_matomo', $this->request->variable('data_name_matomo', ''));
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_ACP_COOKIE_SWITCHES');
				trigger_error($this->language->lang('ACP_COOKIE_SETTING_SAVED') . adm_back_link($this->u_action));
			}
		}

		$s_errors = !empty($errors);

		if (empty($this->config['matomo_side_id']))
		{
			$matomoacpsideid				= '1';
		}
		else
		{
			$matomoacpsideid				= $this->config['matomo_side_id'];
		}

		if ($this->ext_manager->is_enabled('crizzo/aboutus') && $this->config['acp_aboutus_enable'] == 1)
		{
			$impressum_link_for_klaro	= true;
		}
		else
		{
			$impressum_link_for_klaro	= false;
		}

		$gaos_pos1		= $this->read_script_value('gaos_pos1');
		$gaos_pos2		= $this->read_script_value('gaos_pos2');
		$matomo_pos1	= $this->read_script_value('matomo_pos1');
		$matomo_pos2	= $this->read_script_value('matomo_pos2');
		$goads_pos1		= $this->read_script_value('goads_pos1');
		$goads_pos2		= $this->read_script_value('goads_pos2');
		$gomaps_pos1	= $this->read_script_value('gomaps_pos1');
		$gomaps_pos2	= $this->read_script_value('gomaps_pos2');

		$this->template->assign_vars([
			'S_ERROR'									=> $s_errors,
			'ERROR_MSG'									=> $s_errors ? implode('<br>', $errors) : '',
			'CM_EXT_NAME'								=> $ext_display_name,
			'COOKIE_ABOUT_US_CHECK'						=> $impressum_link_for_klaro,
			'ACP_CM_SETTINGS_PAGE_TITLE_EXPLAIN'		=> sprintf($this->language->lang('ACP_CM_SETTINGS_PAGE_TITLE_EXPLAIN'), $own_scipts_header, $own_scipts_footer),
			'DATA_NAME_GOOGLEADSENSE'					=> $this->config['data_name_googleadsense'],
			'DATA_NAME_GOOGLEANALYTICS'					=> $this->config['data_name_googleanalytics'],
			'GAOS_POS1'									=> $gaos_pos1,
			'GAOS_POS2'									=> $gaos_pos2,
			'MATOMO_POS1'								=> $matomo_pos1,
			'MATOMO_POS2'								=> $matomo_pos2,
			'GOADS_POS1'								=> $goads_pos1,
			'GOADS_POS2'								=> $goads_pos2,
			'GOMAPS_POS1'								=> $gomaps_pos1,
			'GOMAPS_POS2'								=> $gomaps_pos2,
			'DATA_NAME_GOOGLEMAPS'						=> $this->config['data_name_googlemaps'],
			'DATA_NAME_AMAZON'							=> $this->config['data_name_amazon'],
			'DATA_NAME_GOOGLETRANSLATE'					=> $this->config['data_name_googletranslate'],
			'DATA_NAME_GOOGLEWEBFONT'					=> $this->config['data_name_googlewebfont'],
			'DATA_NAME_MATOMO'							=> $this->config['data_name_matomo'],
			'COOKIE_IMPRESSUM_INTERN_EXTERN'			=> $this->config['cookie_impressum_intern_extern'],
			'COOKIE_IMPRESSUM_LINK_EXTERN'				=> $this->config['cookie_impressum_link_extern'],
			'GANALYTICS_OWN_SCRIPT'						=> $this->config['ganalytics_own_script'],
			'MATOMO_OWN_SCRIPT'							=> $this->config['matomo_own_script'],
			'MATOMO_SWITCH'								=> $this->config['matomo_switch'],
			'AMAZON_SWITCH'								=> $this->config['amazon_switch'],
			'MATOMO_URL'								=> $this->config['matomo_url'],
			'MATOMO_SIDE_ID'							=> $matomoacpsideid,
			'MATOMO_IN_OUT'								=> $this->config['matomo_in_out'],
			'GOOGLE_WEBFONT_SWITCH'						=> $this->config['google_webfont_switch'],
			'YOUTUBE_BBCODE_SWITCH'						=> $this->config['youtube_bbcode_switch'],
			'GOOGLE_TRANSLATOR_SWITCH'					=> $this->config['google_translator_switch'],
			'GOOGLE_ANALYTICS_NO_TM_SWITCH'				=> $this->config['google_analytics_no_tm_switch'],
			'GOOGLE_ANALYTICS_ID'						=> $this->config['google_analytics_id'],
			'VIMEO_BBCODE_SWITCH'						=> $this->config['vimeo_bbcode_switch'],
			'SPOTIFY_BBCODE_SWITCH'						=> $this->config['spotify_bbcode_switch'],
			'GOOGLE_ADSENSE_SWITCH'						=> $this->config['google_adsense_switch'],
			'GOOGLE_MAPS_SWITCH'						=> $this->config['google_maps_switch'],
			'GOOGLE_ADSENSE_ID'							=> $this->config['google_adsense_id'],
			'U_ACTION'									=> $this->u_action,
		]);
	}

	public function read_script_value($read_script_name)
	{

		$sql = 'SELECT  script_code
			FROM ' . $this->script_table . '
				WHERE script_name = "' . $this->db->sql_escape($read_script_name) . '"';

		$sql		= $this->db->sql_query($sql);
		$read_script_value	= $this->db->sql_fetchfield('script_code');

		return $read_script_value;
	}

	public function update_script_value($script_name, $script_code)
	{
		$sql = 'UPDATE ' . $this->script_table . '
			SET script_code = "' . $this->db->sql_escape($script_code) . '"
			WHERE script_name = "' . $this->db->sql_escape($script_name) . '"';
		$this->db->sql_query($sql);
		return;
	}

	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
