<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\acp;

class jumpboxindex_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function __construct()
	{
		global $phpbb_container;
		$this->phpbb_container		= $phpbb_container;
		$this->language				= $phpbb_container->get('language');
	}

	public function main($id, $mode)
	{
		/** @var \kirk.jumpboxindex.controller.acp $acp_controller */
		$acp_controller = $this->phpbb_container->get('kirk.jumpboxindex.controller.acp');

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'acp_jumpboxindex_' . $mode;

		// Set the page title for our ACP page
		$this->page_title	= $this->language->lang('ACP_JUMPBOXINDEX') . ' &hyphen; ' . $this->language->lang('ACP_JUMPBOXINDEX_' . strtoupper($mode));

		$acp_controller->{'jumpbox_' . $mode}($this->u_action);
	}
}
