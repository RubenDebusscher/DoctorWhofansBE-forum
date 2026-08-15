<?php
/**
 *
 * dsgvo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\dsgvo\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v32x\v329'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_DSGVO_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_DSGVO_TITLE',
				[
					'module_basename'	=> '\chris1278\dsgvo\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
