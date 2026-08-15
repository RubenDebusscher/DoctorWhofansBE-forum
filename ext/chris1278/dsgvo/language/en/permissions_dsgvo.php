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

$lang = array_merge($lang,[
	'ACL_U_DSGVO_PROFILE_DOWNLOAD'				=> 'DSGVO - Can download own profile data',
	'ACL_U_DSGVO_POSTS_DOWNLOAD'				=> 'DSGVO - Can download your own topics and / or contributions (depending on what was set in the ACP of the extension)',
]);
