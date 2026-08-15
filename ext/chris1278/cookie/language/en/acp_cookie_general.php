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
	'ACP_CM_GENERAL_PAGE_TITLE_EXPLAIN'				=> 'Here you can set the general options with which you can determine how the cookie manager should behave. This area is divided into two sections. <br><br><b>1. Settings for Window optics and Position</b><br><br>This is about the possibility of influencing the two windows that appear when the forum is loaded. Depending on the selection, these consist of either just one or two windows. Usually two windows are loaded. First the cookie notice window from which you can then switch to the cookie settings window in which all the switches are displayed (depending on the selection of the switches to be displayed).<br><br><b>2. More Settings</b><br><br>Various settings regarding the storage methods and cookie names can be made here.',
	'ACP_COOKIE_GENERAL_STYLE_OTPION'				=> 'Settings for Window optics and Position',
	'ACP_COOKIE_GENERAL_STYLE_OTPION_EXPLAIN'		=> 'Here you can set how the window of the Cookie-Consent Manager should look like and what position it should have.<br><br><b>Information:</b> Take note that certain options also have an influence on other options in other areas in this section.<br><br>',
	'COOKIE_ICON_SELECTION'							=> 'Icon for the cookie settings window',
	'COOKIE_ICON_SELECTION_EXPLAIN'					=> 'Here you can choose whether you want to display an SVG icon in the window or a Fontawesome icon. The window where the icon is available for selection is the cookie settings window. The icon in the bottom navigation bar is unaffected.<br><br><b>Recommended default: </b> Fontawesome icon',
	'ACP_FONTAWESOME'								=> 'Fontawesome-Icon',
	'ACP_SVG'										=> 'SVG-Icon',
	'KLAROSTYLECOLOR'								=> 'Klaro Style (Dark/Hell Mode)',
	'KLAROSTYLECOLOR_EXPLAIN'						=> 'Here you can choose whether you want the Klaro Manager in a dark look or in a bright look. This then affects all displays of the cookie manager.<br><br><b>Recommended default: </b> Dark',
	'DARK'											=> 'Dark',
	'LIGHT'											=> 'Bright',
	'KLAROSTYLEWIDTH'								=> 'Width of the cookie notice window',
	'KLAROSTYLEWIDTH_EXPLAIN'						=> 'Here you can select whether the window is displayed normally, as it is by default. Alternatively, a look can be selected here that shows the cookie notice window over the full width of the screen. If the selection narrow has been selected, the cookie notice window can then be placed in one of the four corners of the browser. The wide format is only displayed below.<br><br><b>Recommended default: </b> Ad width Narrow',
	'ACP_WIDE'										=> 'Ad width Wide',
	'ACP_SMALL'										=> 'Ad width Narrow',
	'KLAROSTYLEPOSITION'							=> 'Display position of the narrow cookie notice window',
	'KLAROSTYLEPOSITION_EXPLAIN'					=> 'The position of cookie notice windows (popup) can be set here.<br><br><b>Recommended default: </b> Bottom Right',
	'ACP_TOP_LEFT_SMALL'							=> 'Top Left',
	'ACP_TOP_RIGHT_SMALL'							=> 'Top Right',
	'ACP_BOTTOM_LEFT_SMALL'							=> 'Bottom Left',
	'ACP_BOTTOM_RIGHT_SMALL'						=> 'Bottom Right',
	'ACP_STYLE_NOTE'								=> 'The following options result in different window behaviour depending on the selection. However, it is recommended to use the recommended settings.',
	'WINDOW_FIX_IN_THE_MIDDLE'						=> 'Cookie notice window fixed in the middle',
	'WINDOW_FIX_IN_THE_MIDDLE_EXPLAIN'				=> 'With this option, the cookie notice window can be loaded in the middle of the browser. Then it behaves like the cookie settings window. The area around the window can only be used again after you have made a selection in the cookie notice window.<br><br><b>Recommended default: </b>No',
	'WINDOW_POSITION'								=> 'Selection of the first window to be displayed',
	'WINDOW_POSITION_EXPLAIN'						=> 'Here you can select which window you want to display first when loading. If you want to load the <b>Cookie-Notice window</b> first, you can set the position and width of the Cookie-Notice window with the option <b>Width of the first cookie-notice window</b > determine. If you want to load the <b>Cookie settings window</b> directly, the window will open in the middle of the browser and display the options to be selected.<br><br><b>Recommended standard: </b> Cookie notice window',
	'MIDDLE'										=> 'Cookie settings window',
	'DOWNRIGHT'										=> 'Cookie notice window',
	'KLARO_HIDDEN_WINDOWS'							=> 'Cookie notice window and/or cookie settings window Hide',
	'KLARO_HIDDEN_WINDOWS_EXPLAIN'					=> 'With this option, the window(s) can be displayed under the forum in a certain constellation. However, it is recommended not to use this option.<br><br><b>Recommended default: </b> Don´t apply option',
	'HIDDEN'										=> 'apply option',
	'ALTERNATE'										=> 'Don´t apply option',
	'OICM_DEFAULTS'									=> 'Default value Settings for Window optics and Position',
	'OICM_DEFAULTS_EXPLAIN'							=> 'Here you can restore the recommended default values for <b>Window appearance and position settings</b>. To do this, simply press the <b>Recommended default values</b> button and then submit.',
	'ACP_STYLE_DEFAULT'								=> 'Recommended default values',
	'ACP_GENERAL_INFO'								=> 'It is recommended to leave the following options at their Recommended default settings.',
	'ACP_COOKIE_GENERAL_SETTING_OTPION'				=> 'More Settings',
	'ACP_COOKIE_GENERAL_SETTING_OTPION_EXPLAIN'		=> '<b>Attention:</b> Choose the settings here carefully.',
	'NAME_OF_COOKIE'								=> 'Name of the cookie',
	'NAME_OF_COOKIE_EXPLAIN'						=> 'Here you can specify the name of the cookie under which the Cookie Consent Manager saves the visitor´s settings.<br><br><b>Recommended default: </b>Sure',
	'KLARO_DIV_CONTAINER'							=> 'Name of the Klaro-Div container',
	'KLARO_DIV_CONTAINER_EXPLAIN'					=> 'The name of the div container that is created when the cookie manager is started when the page is called up can be specified here. <br><br><b>Recommended standard: </b> Klaro',
	'STORAGE_VERSION'								=> 'Storage method',
	'STORAGE_VERSION_EXPLAIN'						=> 'Here you can select whether you want to use the storage via cookie (cookie) or whether the data should be saved locally (localStorage). With the <b>cookie</b> option, the settings that the user selects are stored in a cookie on the visitor´s computer. With the <b>localStorage</b> option, the user´s settings are stored in the browser´s own memory.<br><br><b>Recommended default: </b> cookie',
	'COOKIE'										=> 'cookie',
	'LOCALSTORAGE'									=> 'localStorage',
	'HTML_CODE_PROCESSING'							=> 'HTML-Code processing',
	'HTML_CODE_PROCESSING_EXPLAIN'					=> 'This switch should remain on <b>phpbb compatible</b>. Otherwise, the built-in links in one or the other text are not displayed as a link but as html code.<br><br><b>Recommended default: </b>phpbb compatible',
	'KLARO'											=> 'Klaro Default',
	'PHPBBKOMP'										=> 'phpbb-Kompatibel',
	'GROUP_FORMATION'								=> 'Group formation',
	'GROUP_FORMATION_EXPLAIN'				 		=> 'Allows services of the same affiliation to be grouped together. <br><br><b>Recommended default: </b>Merge into groups',
	'CM_GROUP'										=> 'Merge into groups',
	'NO_CM_GROUP'									=> 'Show all services not in groups but one below the other',
	'SAVE_ALL_BUTTON'								=> 'Show <b>"Save All"</b> button',
	'SAVE_ALL_BUTTON_EXPLAIN'						=> 'You can use this switch to disable the <b>"Save All"</b> button.<br><br><b>Recommended default: </b>Yes',
	'COOKIE_RUNTIME'								=> 'Cookie Duration',
	'COOKIE_RUNTIME_EXPLAIN'						=> 'With this value you can specify how many days the cookie that the Klaromanager sets remains valid.<br><br><b> Recommended standard: </b>120',
	'SHOW_DECLINE_BUTTON'							=> 'Show <b>Decline</b> button',
	'SHOW_DECLINE_BUTTON_EXPLAIN'					=> 'You can use this switch to disable the <b>"Decline"</b> button.<br><br><b>Recommended default: </b>Yes',
	'TO_THE_COOKIE_SETTINGS'						=> 'To the cookie settings',
	'TO_THE_COOKIE_SETTINGS_EXPLAIN'				=> 'Have the text <b>"To the cookie settings"</b> displayed in the cookie notice window, which is always loaded if no cookies have been confirmed or there are new cookies to be confirmed. <br><br><b>Recommended default: </b>Yes',
	'KLARO_NOTE'									=> 'Realized with Klaro!',
	'KLARO_NOTE_EXPLAIN'							=> 'Insert the note with a link to the Klaro homepage.<br><br><b>Note: </b>Since the script is free, this is activated by default. The <a href="https://kiprotect.com/klaro" target="_blank"><b>provider</b></a> of the script allows the user to deactivate it. However, in order to advertise yourself, we kindly ask you to leave it active.<br><br><b>Recommended default: </b>Yes',
	'OICM_SETTINGS_DEFAULTS'						=> 'Default value Settings for More Settings',
	'OICM_SETTINGS_DEFAULTS_EXPLAIN'				=> 'Here you can restore the recommended default values for <b>More settings</b>. To do this, simply press the <b>Recommended default values</b> button and then submit.',
	'ACP_SETTINGS_DEFAULT'							=> 'Recommended default values',
	'COOKIE_WARN'									=> 'This is just information. By activating this extension, the Default <b>„Cookie notice“</b>, which can be found in the administration area under <a href="%1$s"> <b>Server Configuration/Cookies Settings</b> </a> can be set, suppressed if this is activated. This does not lead to any functional restriction. Only the banner normally displayed is not displayed. The cookie function of this forum is not impaired in any way.',
]);
