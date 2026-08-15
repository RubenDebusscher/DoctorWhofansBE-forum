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
	'ACP_DSGVO_SETTING_SAVED'					=> 'Die Einstellungen für die Erweiterung <b>DSGVO/GDPR Private Download´s</b> wurden Erfolgreich gespeichert!',
	'ACP_DSGVO_SETTINGS'						=> 'Einstellungen',
	'ACP_DSGVO_DOWNLOAD_OPTIONS'				=> 'Daten Download',
	'ACP_DSGVO_POST_FORMAT'						=> 'Beiträge',
	'ACP_DSGVO_POST_FORMAT_EXPLAIN'				=> 'Wähle aus, was beim Download von Beiträgen enthalten sein soll.',
	'DSGVO_ALL'									=> 'Text und Meta-Daten',
	'DSGVO_META'								=> 'Nur Meta-Daten',
	'DSGVO_READ'								=> 'Nur Beiträge mit Leserecht',
	'ACP_DSGVO_POST_READ'						=> 'Nur lesbare Beiträge',
	'ACP_DSGVO_POST_READ_EXPLAIN'				=> 'Soll der Download der Beiträge auf Foren beschränkt werden, die der Benutzer lesen kann?',
	'ACP_DSGVO_POST_UNAPPROVED'					=> 'Ungeprüfte Beiträge',
	'ACP_DSGVO_POST_UNAPPROVED_EXPLAIN'			=> 'Sollen ungeprüfte Beiträge enthalten sein?',
	'ACP_DSGVO_POST_DELETED'					=> 'Gelöschte Beiträge',
	'ACP_DSGVO_POST_DELETED_EXPLAIN'			=> 'Sollen gelöschte Beiträge enthalten sein?<br><br><b>Hinweis: </b>Beiträge die endgültig gelöscht wurden sind leider nicht enthalten, sondern nur die gelöschten die vorläufig als gelöscht markiert sind.',
]);
