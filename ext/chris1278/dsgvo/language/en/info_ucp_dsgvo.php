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
	'UCP_DSGVO_OVERVIEW'					=> 'Overview/Explanations',
	'UCP_DSGVO_PROFILE_DOWNLOAD'			=> 'Download profile data',
	'UCP_DSGVO_DATA_DOWNLOAD'				=> 'Download forum content',
	'NO_PERM_DGSVO'							=> 'You are not authorized to enter this area.',
	'DSGVO_DOWNLOAD_BUTTON'					=> 'Download',
]);
