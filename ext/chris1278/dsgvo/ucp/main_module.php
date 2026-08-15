<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\ucp;

/**
 * dsgvo UCP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $phpbb_container;

		$ucp_controller = $phpbb_container->get('chris1278.dsgvo.controller.ucp');
		$language = $phpbb_container->get('language');

		switch ($mode)
		{
			case 'dsgvo_overview':
				$this->page_title = $language->lang('UCP_DSGVO_OVERVIEW');
				$this->tpl_name = 'ucp_dsgvo_overview';
				$ucp_controller->dsgvo_overview();
			break;
			case 'profile_download':
				$this->page_title = $language->lang('UCP_DSGVO_PROFIL_DOWNLOAD');
				$this->tpl_name = 'ucp_dsgvo_profile_download';
				$ucp_controller->dsgvo_profile_download();
			break;
			case 'data_download':
				$this->page_title = $language->lang('UCP_DSGVO_DATA_DOWNLOAD');
				$this->tpl_name = 'ucp_dsgvo_data_download';
				$ucp_controller->dsgvo_posts_download();
			break;
		}
	}
}
