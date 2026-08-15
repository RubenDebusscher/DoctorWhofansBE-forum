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
	'CM_LANG_DESC'									=> 'Deutsch (Sie)',
	'CM_LANG_EXT_VER' 								=> '2.0.4',
	'CM_LANG_AUTHOR' 								=> 'Chris1278',
	'CM_CONFIG_DESC' 								=> 'Hier können die Einstellungen für die Erweiterung „%1$s“ (v%2$s) geändert werden.',
	'CM_MSG_LANGUAGEPACK_OUTDATED'					=> 'Hinweis: Das Sprachpaket dieser Erweiterung ist nicht mehr aktuell.',
	//ACP Translation
	'ACP_COOKIE_TITLE'								=> 'Opt-In Cookie Manager',
	'ACP_COOKIE_GENERAL'							=> 'Allgemeine Einstellungen',
	'ACP_COOKIE_SWITCHES'							=> 'Einstellungen für Schalter/Dienste',
	'ACP_COOKIE_SETTING_SAVED'						=> 'Die Opt-In Cookie Manager by klaro Script-Einstellungen wurden erfolgreich übernommen!',
	'LOG_ACP_COOKIE_GENERAL'						=> 'Hat in der Erweiterung Opt-In Cookie Manager Einstellungen angepasst.',
	'LOG_ACP_COOKIE_SWITCHES'						=> 'Hat in der Erweiterung Opt-In Cookie Manager Schalter aktiviert/deaktiviert.',
]);
