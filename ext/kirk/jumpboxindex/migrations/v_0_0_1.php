<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\migrations;

class v_0_0_1 extends \phpbb\db\migration\migration
{
	var $jumpboxindex_version = '0.0.1';
	public function effectively_installed()
	{
		return isset($this->config['jumpboxindex_version']) && version_compare($this->config['jumpboxindex_version'], $this->jumpboxindex_version, '>=');
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['config.add', ['jumpboxindex_version', $this->jumpboxindex_version]],
			['config.add', ['jumpbox_default', '1']],
			['config.add', ['jumpbox_ucp', '0']],
			['config.add', ['jumpbox_left', '0']],
			['config.add', ['jumpbox_position', '2']],
			['config.add', ['jumpbox_font_icon', '']],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_JUMPBOXINDEX'
			]],

			['module.add', [
				'acp',
				'ACP_JUMPBOXINDEX',
				[
					'module_basename'	=> '\kirk\jumpboxindex\acp\jumpboxindex_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
