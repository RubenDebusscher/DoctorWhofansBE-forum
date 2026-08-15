<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\migrations;

class v_0_0_2 extends \phpbb\db\migration\migration
{
	var $jumpboxindex_version = '1.0.0';
	public function effectively_installed()
	{
		return isset($this->config['jumpboxindex_version']) && version_compare($this->config['jumpboxindex_version'], $this->jumpboxindex_version, '>=');
	}

	public static function depends_on()
	{
		return ['\kirk\jumpboxindex\migrations\v_0_0_1'];
	}

	public function update_data()
	{
		return [
			['config.update', ['jumpboxindex_version', $this->jumpboxindex_version]],
		];
	}
}
