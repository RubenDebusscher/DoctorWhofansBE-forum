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

class update_database extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\acp_module'];
	}

	public function update_data()
	{
		return [
			['config.add',['vimeo_bbcode_switch', 0]],
			['config.add',['spotify_bbcode_switch', 0]],
			['config.add',['matomo_switch', 0]],
			['config.add',['cookie_icon_selection', 1]],
			['config.add',['matomo_url', '']],
			['config.add',['matomo_side_id', '1']],
			['config.add',['matomo_in_out', 1]],
		];
	}
}
