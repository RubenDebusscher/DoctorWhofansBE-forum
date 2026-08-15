<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\migrations;

class acp_module extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\database'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_COOKIE_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_COOKIE_TITLE', [
					'module_basename'	=> '\chris1278\cookie\acp\main_module',
					'modes'				=> ['settings', 'manage'],
				],
			]],
		];
	}
}
