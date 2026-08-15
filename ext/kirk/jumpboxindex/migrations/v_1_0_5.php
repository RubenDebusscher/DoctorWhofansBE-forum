<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\migrations;

class v_1_0_5 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\kirk\jumpboxindex\migrations\v_1_0_2'];
	}

	public function update_data()
	{
		return [
			['config.add', ['jumpbox_toggle_activated', '1']],
		];
	}
}
