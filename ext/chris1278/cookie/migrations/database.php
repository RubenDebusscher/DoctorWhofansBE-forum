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

class database extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\install_bbcodes'];
	}

	public function update_data()
	{
		return [
			['config.add',['cookie_runtime', '120']],
			['config.add',['google_analytics_id', '']],
			['config.add',['google_analytics_no_tm_switch', 0]],
			['config.add',['google_translator_switch', 0]],
			['config.add',['group_formation', 1]],
			['config.add',['html_code_processing', 1]],
			['config.add',['klaro_div_container', 'klaro']],
			['config.add',['klaro_hidden_windows', 1]],
			['config.add',['klaro_note', 1]],
			['config.add',['name_of_cookie', 'klaro']],
			['config.add',['save_all_button', 1]],
			['config.add',['show_decline_button', 1]],
			['config.add',['storage_version', 'cookie']],
			['config.add',['to_the_cookie_settings', 1]],
			['config.add',['window_fix_in_the_middle', 0]],
			['config.add',['window_position', 1]],
			['config.add',['youtube_bbcode_switch', 0]],
			['config.add',['klarostyle', 'dark']],
		];
	}
}
