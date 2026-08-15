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
	'DSGVO_DATA_DOWNLOAD_INFO'				=> 'Hier kannst Du die von dir hinterlegten Daten herunterladen. Für nähere Erläuterungen sehen Sie sich bitte die Seite <a href="%1$s"><strong><u>"Übersicht/Erläuterungen"</u></strong></a> an.',
	'DSGVO_POST_META'						=> 'Themen und weitere Informationen',
	'DSGVO_POST_META_EXPLAIN'				=> 'Hier kannst du die von dir erstellten Themen als Übersicht herunterladen.',
	'DSGVO_POST_ALL'						=> 'Themen, Beiträge und weitere Informationen',
	'DSGVO_POST_ALL_EXPLAIN'				=> 'Hier kannst du die von dir erstellten Themen, Beiträge usw. als Übersicht herunterladen.',
	'DATA_DOWNLOAD_NOT_ALLOWED'				=> 'Dir fehlt leider die Berechtigung zum Downloaden dieser Daten. Bitte wende dich an einen Administrator.<br><br><a href="%1$s"><strong>« Zurück zur vorherigen Seite</strong></a><strong>',
]);
