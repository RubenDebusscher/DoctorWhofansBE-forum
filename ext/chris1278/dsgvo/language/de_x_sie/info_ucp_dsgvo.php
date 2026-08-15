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
	'UCP_DSGVO_TITLE'						=> 'DSGVO/GDPR Private Download´s',
	'UCP_DSGVO_OVERVIEW'					=> 'Übersicht/Erläuterungen',
	'UCP_DSGVO_PROFILE_DOWNLOAD'			=> 'Profil-Daten Herunterladen',
	'UCP_DSGVO_DATA_DOWNLOAD'				=> 'Foren-Inhalte herunterladen',
	'DSGVO_DOWNLOAD_BUTTON'					=> 'Herunterladen',
	'NO_PERM_DGSVO'							=> 'Sie haben keine Berechtigung, diesen Bereich zu betreten.',
]);
