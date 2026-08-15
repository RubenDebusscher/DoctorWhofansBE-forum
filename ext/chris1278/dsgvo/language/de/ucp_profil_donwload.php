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
	'DSGVO_PROFILE_DOWNLOAD_INFO'			=> 'Hier kannst du die von dir hinterlegten Profilinformationen herunterladen. Für nähere Erläuterungen siehe dir bitte die Seite <a href="%1$s"><strong><u>"Übersicht/Erläuterungen"</u></strong></a> an.',
	'DSGVO_PROFILE_DOWNLOAD'				=> 'Profil-Daten',
	'DSGVO_PROFILE_DOWNLOAD_EXPLAIN'		=> 'Hier kannst du dir die von dir hinterlegten Profil-Daten herunterladen.',
	'PROFIL_DOWNLOAD_NOT_ALLOWED'			=> 'Dir fehlt leider die Berechtigung zum Downloaden dieser Daten. Bitte wende dich an einen Administrator.<br><br><a href="%1$s"><strong>« Zurück zur vorherigen Seite</strong></a><strong>',
]);
