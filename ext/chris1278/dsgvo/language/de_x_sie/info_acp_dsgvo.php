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
	'DSGVO_LANG_DESC'							=> 'Deutsch (Sie)',
	'DSGVO_LANG_EXT_VER' 						=> '1.0.4',
	'DSGVO_LANG_AUTHOR' 						=> 'Chris1278',
	'DSGVO_DESC' 								=> 'Hier können die Einstellungen für die Erweiterung <b>„%1$s“ (v%2$s)</b> geändert werden.',
	'DSGVO_MSG_LANGUAGEPACK_OUTDATED'			=> 'Hinweis: Das Sprachpaket dieser Erweiterung ist nicht mehr aktuell',
	//ACP Language Variable
	'ACP_DSGVO_TITLE'							=> 'DSGVO/GDPR Private Download´s',
	'ACP_DSGVO_SETTINGS'						=> 'Einstellungen',
	'LOG_ACP_DSGVO_SETTINGS'					=> 'Hat einige anpassungen in den Einstellungen der Erweiterung: <b>"DSGVO/GDPR Private Download´s"</b> vorgenommen.',
]);
