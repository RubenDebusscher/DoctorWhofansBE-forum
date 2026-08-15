<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CM_SETTINGS_PAGE_TITLE_EXPLAIN'			=> 'Here you can make the settings to customize your script.<br><br>Select your options/switches here which should be displayed to your visitors when they visit your forum.<br><br>With some switches it is possible to store the script that is required on the website in the database.<br><br><b>Important: </b>Please make sure that you enter the respective script correctly and also have to make the change for the compatibility of this extension <b>(say data-name"...")</b> so that the script can also be controlled accordingly with the Cookie Manager.<br><br>If you have any questions about the format or changing the script, you can ask in the support topic on <a href="https://www.phpbb.de/community/viewtopic.php?t=245064" target="_blank"><b>phpbb.de</b></a> or <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support" target="_blank"><b>phpbb.com</b></a>.',
	'ACP_CM_SWITCH_SET_TITLE'						=> 'Switches to display',
	'ACP_COOKIE_IMPRESSUM'							=> 'About us in the info box in the cookie settings window',
	'ACP_COOKIE_IMPRESSUM_EXPLAIN'					=> 'Here you can choose how to generate your imprint. This is then the link that is displayed in the selection box of the cookie in the info box for the essential cookies of the forum including the link. We recommend the extension <a href="https://www.phpbb.com/customise/db/extension/about_us/" target="_blank"><b>About us from Crizzo</b></a > to use.<br><br><b>Note:</b> This setting only refers to the linked imprint which is generated in the box for the fixed switch for the forum cookies. This has no effect on other types of imprint e.g. about us from Crizzo.',
	'ACP_COOKIE_IMPRESSUM_INTERN_EXTERN'			=> 'Selection of the type of about us used',
	'ACP_COOKIE_IMPRESSUM_INTERN_EXTERN_EXPLAIN'	=> 'Here you can choose what kind of about us you use.',
	'COOKIE_IMPRESSUM_LINK_EXTERN'					=> 'Link to the about us',
	'COOKIE_IMPRESSUM_LINK_EXTERN_EXPLAIN'			=> 'Please enter the complete link to the imprint here.<br><br><b>e.g. https://meine-domain.de/impressum.php</b>',
	'ACP_ABOUT_US_EXTENSION'						=> 'About us from Crizzo (about us Extension)',
	'ACP_EXTERNER_LINK'								=> 'Own Link to the about us',
	'ACP_NO_IMPRESSUM'								=> 'No about us',
	'ACP_MEDIA_SWITCHES'							=> 'Media-BBcodes',
	'YOUTUBE_BBCODE_SWITCH'							=> 'YouTube',
	'YOUTUBE_BBCODE_SWITCH_EXPLAIN'					=> 'This switch is for allowing/disallowing YouTube videos',
	'VIMEO_BBCODE_SWITCH'							=> 'Vimeo',
	'VIMEO_BBCODE_SWITCH_EXPLAIN'					=> 'This toggle is for allowing/disallowing Vimeo videos',
	'SPOTIFY_BBCODE_SWITCH'							=> 'Spotify',
	'SPOTIFY_BBCODE_SWITCH_EXPLAIN'					=> 'This toggle is for allowing/disallowing Spotify videos/playlists',
	'ACP_SWITCHES_WITH_SKRIPTS'						=> 'Switches with built-in scripts',
	'ACP_SWITCHES_WITH_SKRIPTS_EXPLAIN'				=> 'With the switches in this area, the scripts are already integrated in this extension. However, you can also use your own scripts, which then have to be adapted accordingly.',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER'				=> 'Google Analytics without Tag Manager',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER_EXPLAIN'		=> 'This switch activates the cookie switch <b>Google Analytics</b>. You can either use the integrated script for this switch or embed your own script. The data-name-tag to make the scripts compatible with this switch can be found in the <b>Response parameters for Google Analytics</b> option. Please use the value contained there for the script in this format: data-name="VALUE" Where the word value is to be replaced by the value of the corresponding response parameter.',
	'ACP_DATA_NAME_GOOGLEANALYTICS'					=> 'Response parameters for Google Analytics',
	'ACP_DATA_NAME_GOOGLEANALYTICS_EXPLAIN'			=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
	'ACP_GANALYTICS_OWN_SCRIPT'						=> 'Use your own Google Analytics script',
	'ACP_GANALYTICS_OWN_SCRIPT_EXPLAIN'				=> 'You can select this option if you want to use your own Google Analytics script. But also remember to include the response parameter for the script.',
	'GOOGLE_ANALYTICS_ID'							=> 'Google ID',
	'GOOGLE_ANALYTICS_ID_EXPLAIN'					=> 'Please enter your Google ID here.',
	'ACP_GOOGLE_ANALYTICS_ID'						=> 'Example of a Google ID - G-8FK05BPM2N',
	'MATOMO_SWITCH'									=> 'Matomo-Analytics',
	'MATOMO_SWITCH_EXPLAIN'							=> 'This switch activates the cookie switch <a href="https://matomo.org" target="_blank"><b> Matomo Analytics </b></a>. You can either use the integrated script for this switch or embed your own script. You can find the data-name-tag to make the scripts compatible with this switch in the <b>Response parameters for Matomo</b> option. Please use the value contained there for the script in this format: data-name="VALUE" Where the word value is to be replaced by the value of the corresponding response parameter.',
	'ACP_DATA_NAME_MATOMO'							=> 'Response parameters for Matomo',
	'ACP_DATA_NAME_MATOMO_EXPLAIN'					=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
	'ACP_MATOMO_OWN_SCRIPT'							=> 'Use your own Matomo script',
	'ACP_MATOMO_OWN_SCRIPT_EXPLAIN'					=> 'You can select this option if you want to use your own Matomo script. But also remember to include the response parameter for the script.',
	'MATOMO_URL'									=> 'Matomo URL/ID',
	'MATOMO_URL_EXPLAIN'							=> 'Please enter the Matomo Url here.<br><br> Please enter the Url without a leading <b>https://</b> and without a final <b>/</b>. <br><br>To find the right entry, please look for the following <br>line in the tracking code:<b> var u="https://namevonmatomo.matomo.cloud/";</b> and from this you enter then please enter <b>nameofmatomo.matomo.cloud</b> as Url here.',
	'MATOMO_SIDE_ID'								=> 'Side id',
	'MATOMO_SIDE_ID_EXPLAIN'						=> 'Please enter the <b>setSiteId</b> here.<br><br>You can find this in the tracking code. Find the line: <b>_paq.push([\'setSiteId\', \'1\']);</b> The number between the inverted commas is the digit to be entered. If you only have one page that you use then you can leave the field empty (then a 1 will automatically be used as the id) or simply enter the 1 as the value.',
	'MATOMO_IN_OUT'									=> 'Matomo Skript application',
	'MATOMO_IN_OUT_EXPLAIN'							=> 'Here you can select the way the script is processed.<br><br>With the <b>Matomo External Application</b> option, it is assumed that you are only using the Matomo script but the evaluation of the statistics directly from Matomo .org is taken over.<br><br>The <b>Matomo internal application</b> option assumes that the complete script application is on your server/web space.',
	'ACP_MATOMO_EXTERN'								=> 'Matomo External application',
	'ACP_MATOMO_INTERN'								=> 'Matomo internal application',
	'ACP_SWITCHES_WITHOUT_SKRIPTS'					=> 'Switches without built-in scripts',
	'ACP_SWITCHES_WITHOUT_SKRIPTS_EXPLAIN'			=> 'With the switches in this area, the scripts are not integrated in this extension here. Only the corresponding switches are hereby made available. The associated scripts must be integrated yourself. It should also be noted here that the response parameter must be integrated accordingly.',
	'ACP_GOOGLE_WEBFONT_SWITCH'						=> 'Google Webfont',
	'ACP_GOOGLE_WEBFONT_SWITCH_EXPLAIN'				=> 'This switch activates the cookie switch <b>Google Webfont</b>. The data-name-tag to make the scripts compatible with this switch can be found in the <b>Response parameters for Google Webfonts</b> option. Please use the value contained there for the script in this format: <b>data-name="VALUE"</b> Where the word <b>value</b> is to be replaced by the value of the corresponding response parameter is.<br><br><b>Important:</b><br>Please <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/ 238726?p=844191&sid=64035e3ba12e9dbce6435b1d4cf49c5a#p844191" target="_blank"><b>>>> Read the relevant instructions here<<<</b></a>.',
	'ACP_DATA_NAME_GOOGLEWEBFONT'					=> 'Response parameters for Google Webfont´s',
	'ACP_DATA_NAME_GOOGLEWEBFONT_EXPLAIN'			=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
	'ACP_GOOGLE_ADSENSE_SWITCH'						=> 'Advertisement Management Extension (Google AdSense)',
	'ACP_GOOGLE_ADSENSE_SWITCH_EXPLAIN'				=> 'This switch activates the cookie switch <b>Google AdSense</b> for <a href="https://www.phpbb.com/customise/db/extension/ads/" target="_blank"><b>advertisement Management</b></a>. The data-name-tag to make the scripts compatible with this switch can be found in the <b>Response parameters for Google AdSense</b> option. Please use the value contained there for the script in this format: <b>data-name="VALUE"</b> Where the word <b>value</b> is to be replaced by the value of the corresponding response parameter is..<br><br><b>Important:</b><br>Please <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic /238726" target="_blank"><b>>>> Read the corresponding instructions here<<<</b></a>.',
	'ACP_DATA_NAME_GOOGLEADSENSE'					=> 'Response parameters for Google AdSense',
	'ACP_DATA_NAME_GOOGLEADSENSE_EXPLAIN'			=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
	'ACP_GOOGLE_MAPS_SWITCH'						=> 'Google-Maps',
	'ACP_GOOGLE_MAPS_SWITCH_EXPLAIN'				=> 'This switch activates the cookie switch <b>Google Maps</b>. The data-name-tag to make the scripts compatible with this switch can be found in the <b>Response parameters for Google Maps</b> option. Please use the value contained there for the script in this format: <b>data-name="VALUE"</b> Where the word <b>value</b> is to be replaced by the value of the corresponding response parameter is.<br><br><b>Important:</b><br>Please <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/ 238726" target="_blank"><b>>>> Read the corresponding instructions here<<<</b></a>.',
	'ACP_DATA_NAME_GOOGLEMAPS'						=> 'Response parameters for Google Maps',
	'ACP_DATA_NAME_GOOGLEMAPS_EXPLAIN'				=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
	'GOOGLE_TRANSLATOR_SWITCH'						=> 'Google Translator',
	'GOOGLE_TRANSLATOR_SWITCH_EXPLAIN'				=> 'This switch activates the cookie switch <b>Google Translator</b> Extension by HiFiKabin. You can also use this if you want to install Google Translator script yourself. The data-name-tag to make the scripts compatible with this switch can be found in the <b>Response parameters for Google Translator</b> option. Please use the value contained there for the script in this format: data-name="VALUE" Where the word value is to be replaced by the value of the corresponding response parameter.<br><br><b>Important:</b><br>Please be sure to <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726?p=844736#p844736" target="_blank"> <b> >>> Read the relevant instructions here<<< </b></a>.',
	'ACP_DATA_NAME_GOOGLETRANSLATE'					=> 'Response parameters for Google Translator',
	'ACP_DATA_NAME_GOOGLETRANSLATE_EXPLAIN'			=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
	'CM_COOKIE_UPDATE'								=> 'The Opt-In Cookie Manager by klaro Script settings have been successfully applied!',
	'ACP_GOAS_POS1'									=> 'Google Analytics without Tag Manager Script for the upper html area',
	'ACP_GOAS_POS1_EXPLAIN'							=> 'If the script has to be loaded relatively at the beginning of the page construction, you can enter the part of the Java script here that you received from Google to integrate.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_GOAS_POS2'									=> 'Google Analytics without Tag Manager Script for the lower html area',
	'ACP_GOAS_POS2_EXPLAIN'							=> 'If the script has to be loaded relative to the end of the page layout, you can enter the part of the Java script here that you received from Google to integrate.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_MATOMO_POS1'								=> 'Matomo-Analytics Script for the upper html area',
	'ACP_MATOMO_POS1_EXPLAIN'						=> 'If the script has to be loaded relatively at the beginning of the page layout, you can enter the part of the Java script here that you received from Matomo Analytics to integrate.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_MATOMO_POS2'								=> 'Matomo-Analytics Script for the lower html area',
	'ACP_MATOMO_POS2_EXPLAIN'						=> 'If the script has to be loaded relative to the end of the page layout, you can enter the part of the Java script here that you received from Matomo Analytics to integrate.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_GOADS_POS1'								=> 'Advertisement Management Extension (Google AdSense) Script for the upper html area',
	'ACP_GOADS_POS1_EXPLAIN'						=> 'Here you can enter Javascript from Google AdSense if it should be loaded relatively early in the page construction.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_GOADS_POS2'								=> 'Advertisement Management Extension (Google AdSense) Script for the lower html area',
	'ACP_GOADS_POS2_EXPLAIN'						=> 'Here you can enter Javascript from Google AdSense if it should be loaded relative to the end of the page build.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_GOMAPS_POS1'								=> 'Google-Maps Script for the upper html area',
	'ACP_GOMAPS_POS1_EXPLAIN'						=> 'If a script is required for the integration of the Google Maps map view, which has to be loaded relatively at the beginning of the page layout, you can enter it here.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'ACP_GOMAPS_POS2'								=> 'Google-Maps Script for the lower html area',
	'ACP_GOMAPS_POS2_EXPLAIN'						=> 'If a script is required for the integration of the Google Maps map view, which has to be loaded towards the end of the page layout, you can enter it here.<br><br><b>Information:</b><br>If no script is needed at this point, simply leave the field empty.',
	'AMAZON_SWITCH'									=> 'Amazon Switch',
	'AMAZON_SWITCH_EXPLAIN'							=> 'This switch activates the cookie switch for <b>Amazon advertising</b>. The data-name-tag to make the scripts compatible with this switch can be found in the <b>Response parameters for</b> option. Please use the <b>value</b> contained there for the script in this format: <b>data-name="VALUE"</b> Where the word value is to be replaced by the value of the corresponding response parameter.<br><br><b>Important:</b><br>Please be sure to <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726?p=843751&sid=3d5e580f28601112b8deb6616b18f5b9#p843751" target="_blank"><b>>>> Here<<<</b></a> read the relevant instructions.',
	'ACP_DATA_NAME_AMAZON'							=> 'Response parameters for Amazon',
	'ACP_DATA_NAME_AMAZON_EXPLAIN'					=> 'Here you can enter the value to be used for customizing the script. This is then to be inserted into the script as <b>data-name="..."</b>. This makes the script compatible with the switch of this extension.',
]);
