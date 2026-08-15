<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	protected $extension_manager;
	protected $db;
	protected $config;
	protected $template;
	protected $user;
	protected $script_table;
	protected $root_path;
	protected $php_ext;

	public function __construct(
		\phpbb\extension\manager $ext_manager,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\language\language $language,
		$script_table,
		$root_path,
		$php_ext
	)
	{
		$this->script_table	= $script_table;
		$this->db			= $db;
		$this->ext_manager	= $ext_manager;
		$this->config		= $config;
		$this->template		= $template;
		$this->language		= $language;
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'				=> 'load_language_on_setup',
			'core.page_header_after'		=> 'show_oic_cookie',
		];
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= [
			'ext_name'	=> 'chris1278/cookie',
			'lang_set'	=> 'cookie',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function show_oic_cookie()
	{
		$matomo_url								= $this->config['matomo_url'];
		$google_webfont_switch 					= $this->config['google_webfont_switch'];
		$youtube_bbcode_switch 					= $this->config['youtube_bbcode_switch'];
		$vimeo_bbcode_switch 					= $this->config['vimeo_bbcode_switch'];
		$spotify_bbcode_switch 					= $this->config['spotify_bbcode_switch'];
		$google_translator_switch 				= $this->config['google_translator_switch'];
		$google_analytics_no_tm_switch	 		= $this->config['google_analytics_no_tm_switch'];
		$google_analytics_id 					= $this->config['google_analytics_id'];
		$window_position						= $this->config['window_position'];
		$name_of_cookie 						= $this->config['name_of_cookie'];
		$klaro_div_container 					= $this->config['klaro_div_container'];
		$storage_version						= $this->config['storage_version'];
		$html_code_processing 					= $this->config['html_code_processing'];
		$group_formation 						= $this->config['group_formation'];
		$save_all_button 						= $this->config['save_all_button'];
		$cookie_runtime 						= $this->config['cookie_runtime'];
		$cookie_domain							= $this->config['cookie_domain'];
		$show_decline_button 					= $this->config['show_decline_button'];
		$to_the_cookie_settings 				= $this->config['to_the_cookie_settings'];
		$klaro_note 							= $this->config['klaro_note'];
		$phpbb_cookie_name						= $this->config['cookie_name'];
		$forenname_for_klaro					= $this->config['sitename'];
		$data_name_googleanalytics				= $this->config['data_name_googleanalytics'];
		$data_name_matomo						= $this->config['data_name_matomo'];
		$data_name_googlewebfont				= $this->config['data_name_googlewebfont'];
		$data_name_googleadsense				= $this->config['data_name_googleadsense'];
		$data_name_googletranslate				= $this->config['data_name_googletranslate'];
		$data_name_googlemaps					= $this->config['data_name_googlemaps'];
		$data_name_amazon						= $this->config['data_name_amazon'];
		$matomo_switch							= $this->config['matomo_switch'];
		$u_privacy_link							= append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=privacy');
		$u_terms_link							= append_sid("{$this->root_path}ucp.$this->php_ext", 'mode=terms');

		if ($this->config['matomo_in_out'] == 1)
		{
			$matomodescription				= $this->language->lang('DS_MATOMO_EXTERN');
		}
		else
		{
			$matomodescription				= $this->language->lang('DS_MATOMO_INTERN', 'https://' . $this->config['matomo_url']);
		}

		if (empty($this->config['matomo_side_id']))
		{
			$matomosideid					= '1';
		}
		else
		{
			$matomosideid					= $this->config['matomo_side_id'];
		}

		if ($this->config['cookie_icon_selection'] == 1)
		{
			$cookie_icon_selection				= $this->language->lang('FONTAWESOME_FOR_COOKIE');
			$new_line							= '';
		}
		else
		{
			$cookie_icon_selection				= $this->language->lang('SVG_FOR_COOKIE');
			$new_line							= $this->language->lang('NEW_LINE');
		}

		$max_autologin_time		= $this->config['max_autologin_time'];

		if ($max_autologin_time === '0')
		{
			$cookie_time	= $this->language->lang('COOKIE_TIME_YEAR');
		}
		else
		{
			if ($max_autologin_time === '1')
			{
				$cookie_time	= $max_autologin_time . ' ' . $this->language->lang('COOKIE_TIME_DAY');
			}
			else
			{
				$cookie_time	= $max_autologin_time . ' ' .$this->language->lang('COOKIE_TIME_DAYS');
			}
		}

		if ($cookie_runtime === '1')
		{
			$cookie_time_for_klaro	= $cookie_runtime . ' ' . $this->language->lang('COOKIE_TIME_DAY');
		}
		else
		{
			$cookie_time_for_klaro	= $cookie_runtime . ' ' . $this->language->lang('COOKIE_TIME_DAYS');
		}

		if ($this->config['cookie_impressum_intern_extern'] === 'cookie_imp_extension')
		{
			if ($this->ext_manager->is_enabled('crizzo/aboutus'))
			{
				if ($this->config['acp_aboutus_enable'] == 1)
				{
					$imp_link	= generate_board_url() . '/app.php/aboutus';
					$impressum_link_for_cookie	= '<a href="' . $imp_link . '" target="_blank">Impressum</a>';
				}
				else
				{
					$impressum_link_for_cookie	= '';
				}
			}
		}
		else if ($this->config['cookie_impressum_intern_extern'] === 'cookie_imp_link')
		{
			$imp_link	= $this->config['cookie_impressum_link_extern'];
			$impressum_link_for_cookie	= '<a href="' . $imp_link . '" target="_blank">Impressum</a>';
		}
		else if ($this->config['cookie_impressum_intern_extern'] === 'cookie_no_imp')
		{
			$impressum_link_for_cookie	= '';
		}

		$style_color 							= $this->config['klarostylecolor'];

		if ($this->config['klarostylewidth'] == 'wide')
		{
			$style_postion1							=  '';
			$style_postion2							=  '';
		}
		else if ($this->config['klarostylewidth'] == 'small')
		{
			if ($this->config['klarostyleposition'] == 'topleft')
			{
				$style_postion1							=  'top';
				$style_postion2							=  'left';
			}
			else if ($this->config['klarostyleposition'] == 'topright')
			{
				$style_postion1							=  'top';
				$style_postion2							=  'right';
			}
			else if ($this->config['klarostyleposition'] == 'bottomleft')
			{
				$style_postion1							=  'bottom';
				$style_postion2							=  'left';
			}
			else if ($this->config['klarostyleposition'] == 'bottomright')
			{
				$style_postion1							=  'bottom';
				$style_postion2							=  'right';
			}
		}

		if ($this->config['klarostylewidth'] == 'wide' && $this->config['window_fix_in_the_middle'] == 0)
		{
			if ($this->config['klaro_hidden_windows'] == 1)
			{
				$wide_css	= true;
			}
			else
			{
				$wide_css	= false;
			}
		}
		else
		{
			$wide_css	= false;
		}

		if ($this->config['ganalytics_own_script'] == 1)
		{
			$gaos		= true;
			$gaos_pos1	= $this->read_script_value('gaos_pos1');
			$gaos_pos2	= $this->read_script_value('gaos_pos2');
		}
		else
		{
			$gaos		= false;
			$gaos_pos1	= '';
			$gaos_pos2	= '';
		}

		if ($this->config['matomo_own_script'] == 1)
		{
			$matomos		= true;
			$matomo_pos1	= $this->read_script_value('matomo_pos1');
			$matomo_pos2	= $this->read_script_value('matomo_pos2');
		}
		else
		{
			$matomos		= false;
			$matomo_pos1	= '';
			$matomo_pos2	= '';
		}

		if ($this->config['google_adsense_switch'] == 1)
		{
			$google_adsense_switch		= true;
			$goads_pos1					= $this->read_script_value('goads_pos1');
			$goads_pos2					= $this->read_script_value('goads_pos2');
		}
		else
		{
			$google_adsense_switch	= false;
			$goads_pos1				= '';
			$goads_pos2				= '';
		}

		if ($this->config['google_maps_switch'] == 1)
		{
			$google_maps_switch		= true;
			$gomaps_pos1			= $this->read_script_value('gomaps_pos1');
			$gomaps_pos2			= $this->read_script_value('gomaps_pos2');
		}
		else
		{
			$google_maps_switch		= false;
			$gomaps_pos1			= '';
			$gomaps_pos2			= '';
		}

		$klaro_hidden_windows 					= $this->config['klaro_hidden_windows'];
		$window_fix_in_the_middle 				= $this->config['window_fix_in_the_middle'];
		$amazon_switch							= $this->config['amazon_switch'];
		$data_name_amazon						= $this->config['data_name_amazon'];

		$this->template->assign_vars([
			/* Hide the standard cookie notice from phpbb forum */
			'S_COOKIE_NOTICE'						=> false,
			/* End */
			'COOKIE'								=> $this->language->lang('SECOND_INFOS', $u_privacy_link, $u_terms_link),
			'DS_SEC_TECH_COOKIE'					=> $this->language->lang('DS_TECH_COOKIE', $phpbb_cookie_name, $cookie_time, $impressum_link_for_cookie),
			'DS_SEC_KLARO_COOKIE'					=> $this->language->lang('DS_KLARO_COOKIE', $name_of_cookie, $cookie_time_for_klaro, $forenname_for_klaro),
			'SEC_MATOMO_DESCRIPTION'				=> $this->language->lang('MATOMO_DESCRIPTION', $matomodescription),
			'DATA_NAME_GOOGLEANALYTICS'				=> $data_name_googleanalytics,
			'DATA_NAME_MATOMO'						=> $data_name_matomo,
			'DATA_NAME_GOOGLEWEBFONT'				=> $data_name_googlewebfont,
			'DATA_NAME_GOOGLEADSENSE'				=> $data_name_googleadsense,
			'DATA_NAME_GOOGLETRANSLATE'				=> $data_name_googletranslate,
			'DATA_NAME_GOOGLEMAPS'					=> $data_name_googlemaps,
			'DATA_NAME_AMAZON'						=> $data_name_amazon,
			'GOOGLE_MAPS_SWITCH'					=> $google_maps_switch,
			'AMAZON_SWITCH'							=> $amazon_switch,
			'WIDE_CSS'								=> $wide_css,
			'STYLE_COLOR'							=> $style_color,
			'STYLE_POSITION_1'						=> $style_postion1,
			'STYLE_POSITION_2'						=> $style_postion2,
			'STYLE_WIDTH'							=> 'small',
			'MATOMO_URL'							=> $matomo_url,
			'MATOMO_SIDE_ID'						=> $matomosideid,
			'MATOMO_SWITCH'							=> $matomo_switch,
			'VIMEO_BBCODE_SWITCH'					=> $vimeo_bbcode_switch,
			'SPOTIFY_BBCODE_SWITCH'					=> $spotify_bbcode_switch,
			'GOOGLE_ADSENSE_SWITCH'					=> $google_adsense_switch,
			'S_GANALYTICS_OWN_SCRIPT'				=> $gaos,
			'GAOS_POS1'								=> htmlspecialchars_decode($gaos_pos1, ENT_QUOTES),
			'GAOS_POS2'								=> htmlspecialchars_decode($gaos_pos2, ENT_QUOTES),
			'S_MATOMO_OWN_SCRIPT'					=> $matomos,
			'MATOMO_POS1'							=> htmlspecialchars_decode($matomo_pos1, ENT_QUOTES),
			'MATOMO_POS2'							=> htmlspecialchars_decode($matomo_pos2, ENT_QUOTES),
			'GOADS_POS1'							=> htmlspecialchars_decode($goads_pos1, ENT_QUOTES),
			'GOADS_POS2'							=> htmlspecialchars_decode($goads_pos2, ENT_QUOTES),
			'GOMAPS_POS1'							=> htmlspecialchars_decode($gomaps_pos1, ENT_QUOTES),
			'GOMAPS_POS2'							=> htmlspecialchars_decode($gomaps_pos2, ENT_QUOTES),
			'GOOGLE_WEBFONT_SWITCH'					=> $google_webfont_switch,
			'YOUTUBE_BBCODE_SWITCH'					=> $youtube_bbcode_switch,
			'GOOGLE_TRANSLATOR_SWITCH'				=> $google_translator_switch,
			'GOOGLE_ANALYTICS_NO_TM_SWITCH'			=> $google_analytics_no_tm_switch,
			'WINDOW_POSITION'						=> $window_position,
			'NAME_OF_COOKIE'						=> $name_of_cookie,
			'KLARO_DIV_CONTAINER'					=> $klaro_div_container,
			'STORAGE_VERSION'						=> $storage_version,
			'KLARO_HIDDEN_WINDOWS'					=> $klaro_hidden_windows,
			'HTML_CODE_PROCESSING'					=> $html_code_processing,
			'GROUP_FORMATION'						=> $group_formation,
			'COOKIE_ICON_SELECTION'					=> $cookie_icon_selection,
			'NEW_LINE'								=> $new_line,
			'SAVE_ALL_BUTTON'						=> $save_all_button,
			'COOKIE_RUNTIME'						=> $cookie_runtime,
			'COOKIE_DOMAIN'							=> $cookie_domain,
			'SHOW_DECLINE_BUTTON'					=> $show_decline_button,
			'TO_THE_COOKIE_SETTINGS'				=> $to_the_cookie_settings,
			'WINDOW_FIX_IN_THE_MIDDLE'				=> $window_fix_in_the_middle,
			'KLARO_NOTE'							=> $klaro_note,
			'GOOGLE_ANALYTICS_ID'					=> $google_analytics_id,
		]);
	}

	public function read_script_value($read_script_name)
	{
		$sql = 'SELECT  script_code
			FROM ' . $this->script_table . '
				WHERE script_name = "' . $this->db->sql_escape($read_script_name) . '"';

		$sql		= $this->db->sql_query($sql);
		$read_script_value	= $this->db->sql_fetchfield('script_code');

		return $read_script_value;
	}
}
