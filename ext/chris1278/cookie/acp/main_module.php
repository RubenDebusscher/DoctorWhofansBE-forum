<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\acp;

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $phpbb_container;
		$admin_controller = $phpbb_container->get('chris1278.cookie.admin.controller');
		$language = $phpbb_container->get('language');
		$admin_controller->set_page_url($this->u_action);

		switch ($mode)
		{
			case 'settings':
				$this->page_title = $language->lang('ACP_COOKIE_GENERAL');
				$this->tpl_name = 'acp_cookie_general';
				$admin_controller->display_general();
			break;

			case 'manage':
				$this->page_title = $language->lang('ACP_COOKIE_SWITCHES');
				$this->tpl_name = 'acp_cookie_switches';
				$admin_controller->display_switches();
			break;
		}
	}
}
