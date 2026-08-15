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
	// language pack author
	'CM_LANG_DESC'									=> 'English ',
	'CM_LANG_EXT_VER' 								=> '2.0.4',
	'CM_LANG_AUTHOR' 								=> 'Chris1278',
	'CM_CONFIG_DESC' 								=> 'The settings for the „%1$s“ (v%2$s) can be changed here.',
	'CM_MSG_LANGUAGEPACK_OUTDATED'					=> 'Note: The language pack for this extension is no longer up-to-date.',
	///ACP Translation
	'ACP_COOKIE_TITLE'								=> 'Opt-In Cookie Manager',
	'ACP_COOKIE_GENERAL'							=> 'General Settings',
	'ACP_COOKIE_SWITCHES'							=> 'Settings for Switches/Services',
	'ACP_COOKIE_SETTING_SAVED'						=> 'The Opt-In Cookie Manager by klaro Script settings have been successfully applied!',
	'LOG_ACP_COOKIE_GENERAL'						=> 'Adjusted settings in the Opt-In Cookie Manager extension.',
	'LOG_ACP_COOKIE_SWITCHES'						=> 'Has opt-in cookie manager switch enabled/disabled in extension.',
]);
