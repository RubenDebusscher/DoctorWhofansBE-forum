<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2022 Kirk https://reyno41.bplaced.net/phpbb
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'JUMPBOXINDEX'										=> 'Jumpbox on Index',
	'ERROR_JUMPBOXINDEX_EXTENSION_NOT_ENABLEABLE'		=> 'Die Erweiterung „%1$s“ kann nicht aktiviert werden. Bitte prüfe die Voraussetzungen, die für die Erweiterung notwendig sind.',
	'ERROR_MSG_PHPBB_WRONG_VERSION'						=> 'Minimum phpBB %2$s aber kleiner als %3$s',
	'ERROR_MSG_PHP_WRONG_VERSION'						=> 'Minimum PHP %2$s aber kleiner als %3$s',
]);
