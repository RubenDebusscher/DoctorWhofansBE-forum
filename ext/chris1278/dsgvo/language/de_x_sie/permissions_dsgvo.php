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
	'ACL_U_DSGVO_PROFILE_DOWNLOAD'				=> 'DSGVO - Kann eigene Profildaten herunterladen',
	'ACL_U_DSGVO_POSTS_DOWNLOAD'				=> 'DSGVO - Kann eigene Themen und/oder Beiträge herunterladen (Je nach dem was im ACP der Extension eingestellt wurde)',
]);
