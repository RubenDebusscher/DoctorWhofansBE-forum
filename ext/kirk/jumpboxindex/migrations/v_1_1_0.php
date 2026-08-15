<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace kirk\jumpboxindex\migrations;

class v_1_1_0 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\kirk\jumpboxindex\migrations\v_1_0_5'];
	}

	public function update_data()
	{
		return [
			['config.add'		, ['jumpbox_right'	, $this->config['jumpbox_left']]],
			['config.add'		, ['jumpbox_right', '0']],
			// remove configs
			['config.remove'	, ['jumpbox_left']],
		];
	}
}
