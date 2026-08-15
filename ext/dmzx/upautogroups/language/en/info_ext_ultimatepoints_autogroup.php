<?php
/**
*
* @package phpBB Extension - Ultimate Points Auto Group
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'UP_AUTOGROUPS_REQUIRES_AUTOGROUPS'	=> 'The <strong>“Ultimate Points • Auto Groups”</strong> extension requires that the <strong>“Auto Groups”</strong> extension is enabled.',
	'UP_AUTOGROUPS_REQUIRES_UP'			=> 'The <strong>“Ultimate Points • Auto Groups”</strong> extension requires that the <strong>“Ultimate Points”</strong> extension is enabled.',
	'UP_AUTOGROUPS_REQUIRES_UP_VERSION'	=> 'Minimum <strong>“Ultimate Points”</strong> version required is <strong>%s</strong>.',
]);
