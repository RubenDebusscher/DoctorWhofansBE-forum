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

class V_2_0_3 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\install_spotify_bbcodes'];
	}

	public function update_data()
	{
		global $phpbb_container;

		$ext_manager 	=	$phpbb_container->get('ext.manager');

		if ($ext_manager->is_enabled('crizzo/aboutus'))
		{
			$db_cookie_impressum_intern_extern	=	'cookie_imp_extension';
		}
		else
		{
			$db_cookie_impressum_intern_extern	=	'cookie_no_imp';
		}

		return [
			['config.add',['first_window_style_switch', 1]],
			['config.add',['ganalytics_own_script', 0]],
			['config.add',['matomo_own_script', 0]],
			['config.add',['google_webfont_switch', 0]],
			['config.add',['google_adsense_switch', 0]],
			['config.add',['cookie_impressum_intern_extern', '' . $db_cookie_impressum_intern_extern . '']],
			['config.add',['cookie_impressum_link_extern', '']],
			['config.remove',['klarostyle']],
			['config.add',['klarostylecolor', 'dark']],
			['config.add',['klarostyleposition', 'bottomright']],
			['config.add',['klarostylewidth', 'small']],
			['config.add',['data_name_googletranslate', 'googletranslate']],
			['config.add',['data_name_googleanalytics', 'g-analytics']],
			['config.add',['data_name_matomo', 'matomo']],
			['config.add',['data_name_googlewebfont', 'googlewebfont']],
			['config.add',['data_name_googleadsense', 'google_adsense']],
			['config.add',['data_name_googlemaps', 'googlemaps']],
			['config.add',['google_maps_switch', 0]],
		];
	}
}
