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

class install_ucp_module extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\dsgvo\migrations\install_acp_module'];
	}
	public function update_data()
	{
		return [
			['module.add', [
				'ucp',
				0,
				'UCP_DSGVO_TITLE'
			]],
			['module.add', [
				'ucp',
				'UCP_DSGVO_TITLE',
				[
					'module_basename'	=> '\chris1278\dsgvo\ucp\main_module',
					'modes'				=> ['dsgvo_overview', 'profile_download', 'data_download'],
				],
			]],
		];
	}
}
