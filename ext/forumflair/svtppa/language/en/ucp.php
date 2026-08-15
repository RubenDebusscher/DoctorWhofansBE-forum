<?php

/*
* @package phpBB Extension - Simple View Topic Post Profile Alternator
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_SVTPPA_TTL'	=> 'Alternate post profiles',
	'UCP_SVTPPA_LFT'	=> 'Yes - First post on left',
	'UCP_SVTPPA_RGHT'	=> 'Yes - First post on right',
));
