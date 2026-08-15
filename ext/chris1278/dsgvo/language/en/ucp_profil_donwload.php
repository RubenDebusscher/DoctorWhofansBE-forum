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
	'DSGVO_PROFILE_DOWNLOAD_INFO'			=> 'Here you can download the data you have stored. For a more detailed explanation, please see the <a href="%1$s"><strong><u>"Overview/Explanations"</u></strong></a> page.',
	'DSGVO_PROFILE_DOWNLOAD'				=> 'Profile data',
	'DSGVO_PROFILE_DOWNLOAD_EXPLAIN'		=> 'Here you can download the profile data you have saved.',
	'PROFIL_DOWNLOAD_NOT_ALLOWED'			=> 'Unfortunately, you do not have permission to download this data. Please contact an administrator.<br><br><a href="%1$s"><strong>« Back to previous page</strong></a><strong>',
]);
