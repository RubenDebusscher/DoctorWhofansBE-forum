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
	'DSGVO_DATA_DOWNLOAD_INFO'				=> 'Hier können Sie die von Ihnen hinterlegten Daten herunterladen. Für nähere Erläuterungen sehen Sie sich bitte die Seite <b>"Übersicht/Erläuterungen"</b> an.',
	'DSGVO_POST_META'						=> 'Themen und weitere Informationen',
	'DSGVO_POST_META_EXPLAIN'				=> 'Hier können Sie die von Ihnen erstellten Themen als Übersicht herunterladen.',
	'DSGVO_POST_ALL'						=> 'Themen, Beiträge und weitere Informationen',
	'DSGVO_POST_ALL_EXPLAIN'				=> 'Hier können Sie die von Ihnen erstellten Themen, Beiträge als Übersicht herunterladen.',
	'DATA_DOWNLOAD_NOT_ALLOWED'				=> 'Ihnen fehlt leider die Berechtigung zum Downloaden dieser Daten. Bitte wenden Sie sich an einen Administrator.<br><br><a href="%1$s"><strong>« Zurück zur vorherigen Seite</strong></a><strong>',
]);
