<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\controller;

class jumpboxindex_acp_controller
{
	protected $config;
	protected $language;
	protected $request;
	protected $template;
	protected $md_manager;
	protected $phpbb_admin_path;
	protected $php_ext;
	protected $u_action;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\language\language $language,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		$ext_manager,
		$path_helper,
		$php_ext
	)
	{
		$this->config				= $config;
		$this->language				= $language;
		$this->request				= $request;
		$this->template				= $template;
		$this->php_ext				= $php_ext;
		$this->phpbb_admin_path		= $path_helper->get_phpbb_root_path() . $path_helper->get_adm_relative_path();
		$this->md_manager			= $ext_manager->create_extension_metadata_manager('kirk/jumpboxindex')->get_metadata('all');
	}

	public function jumpbox_settings($u_action)
	{
		// Jumpboxindex Settings
		$form_key						= 'acp_jumpboxindex';
		$this->u_action					= $u_action;
		$u_loadsettings					= append_sid("{$this->phpbb_admin_path}index.$this->php_ext" ,'i=acp_board&amp;mode=load');
		$u_jumpbox_settings				= append_sid("{$this->phpbb_admin_path}index.$this->php_ext" ,'i=-kirk-jumpboxindex-acp-jumpboxindex_module&mode=settings');
		$disp_ext_name					= $this->md_manager['extra']['display-name'];
		$jumpboxindex_version			= $this->md_manager['version'];
		$jumpbox_colon					= $this->language->lang('COLON');
		$jumpbox_config_updated			= $this->language->lang('CONFIG_UPDATED');
		$jumpbox_display_deactivated	= $this->config['load_jumpbox'] == 0;
		$submit							= $this->request->is_set_post('submit');
		$jumpbox_notes					= '';
		$this->language->add_lang('jumpboxindex_acp', 'kirk/jumpboxindex');
		add_form_key($form_key);

		if ($submit)
		{
			if (!check_form_key($form_key))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$this->config->set('jumpbox_toggle_activated', $this->request->variable('jumpbox_toggle_activated', ''));
			$this->config->set('jumpbox_default', $this->request->variable('jumpbox_default', ''));
			$this->config->set('jumpbox_ucp', $this->request->variable('jumpbox_ucp', ''));
			$this->config->set('jumpbox_right', $this->request->variable('jumpbox_right', ''));
			$this->config->set('jumpbox_position', $this->request->variable('jumpbox_position', ''));
			$this->config->set('jumpbox_font_icon', $this->request->variable('jumpbox_font_icon', ''));
			meta_refresh(2, $u_jumpbox_settings);
			trigger_error($this->language->lang('JUMPBOX_SETTINGS_UPDATED', $disp_ext_name, $jumpbox_colon, $jumpbox_config_updated) . adm_back_link($this->u_action));
		}

		if ($jumpbox_display_deactivated)
		{
			$this->add_jumpbox_note($jumpbox_notes, $this->language->lang('JUMPBOX_DISPLAY_DEACTIVATED', $u_loadsettings));
		}

		$this->template->assign_vars([
			'JUMPBOX_NOTES'					=> $jumpbox_notes,
			'JUMPBOX_DISPLAY_DEACTIVATED'	=> $jumpbox_display_deactivated,
			'JUMPBOX_TOGGLE_ACTIVATED'		=> $this->config['jumpbox_toggle_activated'],
			'JUMPBOX_DEFAULT'				=> $this->config['jumpbox_default'],
			'JUMPBOX_UCP'					=> $this->config['jumpbox_ucp'],
			'JUMPBOX_RIGHT'					=> $this->config['jumpbox_right'],
			'JUMPBOX_POSITION'				=> $this->config['jumpbox_position'],
			'JUMPBOX_POSITION_OPTIONS'		=> [
				'JUMPBOX_NAVBAR_TOP'		=> '1',
				'JUMPBOX_FORUMLIST_BEFORE'	=> '2',
				'JUMPBOX_STATISTICS_AFTER'	=> '3',
				'JUMPBOX_NAVBAR_BOTTOM'		=> '4',
			],
			'JUMPBOX_FONT_ICON'				=> $this->config['jumpbox_font_icon'],
			'JUMPBOX_VERSION_COPY'			=> $this->language->lang('JUMPBOXINDEX_VERSION_COPY', $disp_ext_name, $jumpboxindex_version),
			'U_ACTION'						=> $this->u_action
		]);
	}

	private function add_jumpbox_note(string &$jumpbox_notes, string $msg)
	{
		$jumpbox_notes .= (($jumpbox_notes != '') ? "\n" : "") . sprintf('%s', $msg);
	}
}
