<?php
/**
*
* For DSGVO/GDPR Private Download´s Extension by Chris1278
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
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
	// Information For Versionscheck Metadaten
	'DSGVO_LANG_DESC'							=> 'English (en)',
	'DSGVO_LANG_EXT_VER' 						=> '1.0.4',
	'DSGVO_LANG_AUTHOR' 						=> 'Chris1278',
	'DSGVO_DESC' 								=> 'Here the settings for the extension <b>„%1$s“ (v%2$s)</b> can be changed.',
	'DSGVO_MSG_LANGUAGEPACK_OUTDATED'			=> 'Note: The language pack for this extension is no longer up-to-date',
	//ACP Language Variable
	'ACP_DSGVO_TITLE'							=> 'DSGVO/GDPR Private Download´s',
	'ACP_DSGVO_SETTINGS'						=> 'Settings',
	'LOG_ACP_DSGVO_SETTINGS'					=> 'Made some adjustments in the settings of the extension: <b>"DSGVO/GDPR Private Download´s"</b>.',
]);
