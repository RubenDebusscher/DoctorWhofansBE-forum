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
	'ACP_DSGVO_SETTING_SAVED'					=> 'The settings for the <b>DSGVO/GDPR Private Download´s</b> extension have been successfully saved!',
	'ACP_DSGVO_SETTINGS'						=> 'Settings',
	'ACP_DSGVO_DOWNLOAD_OPTIONS'				=> 'Data Download',
	'ACP_DSGVO_POST_FORMAT'						=> 'Posts',
	'ACP_DSGVO_POST_FORMAT_EXPLAIN'				=> 'Choose what to include when downloading posts.',
	'DSGVO_ALL'									=> 'Text and Meta-Data',
	'DSGVO_META'								=> 'Only Meta-Data',
	'DSGVO_READ'								=> 'Restrict to messages with read access',
	'ACP_DSGVO_POST_READ'						=> 'Visible messages only',
	'ACP_DSGVO_POST_READ_EXPLAIN'				=> 'Shall the download of messages be restricted to those a user has read access to?',
	'ACP_DSGVO_POST_UNAPPROVED'					=> 'Messages pending approval',
	'ACP_DSGVO_POST_UNAPPROVED_EXPLAIN'			=> 'Shall messages still pending approval be included in the download?',
	'ACP_DSGVO_POST_DELETED'					=> 'Deleted messages',
	'ACP_DSGVO_POST_DELETED_EXPLAIN'			=> 'Shall deleted messages be included in the download?<br><br><b>Note: </b>Unfortunately, posts that have been permanently deleted are not included, only the deleted ones that are provisionally marked as deleted.',
]);
