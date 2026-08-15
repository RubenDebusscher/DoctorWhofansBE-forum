<?php
/**
*
* @package phpBB Extension - Jumpbox on Index
* @copyright (c) 2020 - 2024 Kirk https://reyno41.bplaced.net/phpbb
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
	// Jumpbox Page titel
	'JUMPBOXINDEX'						=> 'Jumpbox on Index',
	'JUMPBOXINDEX_EXPLAIN'				=> 'Various settings (e.g. the position of the Jumpbox) can be made here.',

	// Jumpbox Toggle Activated
	'JUMPBOX_TOGGLE_ACTIVATE'			=> 'Activate Toggle Switch',
	'JUMPBOX_TOGGLE_ACTIVATE_EXPLAIN'	=> 'If activated, the radio buttons Yes/No are replaced with a toggle switch.',
	'JUMPBOX_TOGGLECTRL_ACTIVATED'		=> 'Toggle Control is activated, this switch currently has no meaning!',

	// Jumpbox default
	'JUMPBOX_DEFAULT'					=> 'Display of jumpbox in the default display',
	'JUMPBOX_DEFAULT_EXPLAIN'			=> 'When deactivated, the Jumpbox display for as a Font Awesome icon.',

	// Jumpbox ucp
	'JUMPBOX_UCP'						=> 'Display the Jumpbox on User Control Panel',
	'JUMPBOX_UCP_EXPLAIN'				=> 'When activated, display the Jumpbox additionally on User Control Panel.',

	// Jumpbox left right
	'JUMPBOX_LEFT_RIGHT'				=> 'Display the Jumpbox left or right',
	'JUMPBOX_LEFT_RIGHT_EXPLAIN'		=> 'When activated, the Jumpbox is displayed on the right.',

	// Jumpbox position
	'JUMPBOX_POSITION'					=> 'Jumpbox position',
	'JUMPBOX_POSITION_EXPLAIN'			=> 'Here you can set at which position the Jumpbox should be displayed.',
	'JUMPBOX_NAVBAR_TOP'				=> 'In the upper navbar',
	'JUMPBOX_FORUMLIST_BEFORE'			=> 'Above the Forumlist',
	'JUMPBOX_STATISTICS_AFTER'			=> 'Below the Statistics',
	'JUMPBOX_NAVBAR_BOTTOM'				=> 'In the bottom navbar',

	// Jumpbox icon
	'JUMPBOX_FONT_ICON'					=> 'Jumpbox Icon',
	'JUMPBOX_FONT_ICON_EXPLAIN'			=> 'Enter here the name of a <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer">Font Awesome</a> symbol (e.g. <strong>fa-map-o</strong>).<br>Leave this field blank to use the default  <strong>(fa-sitemap)</strong> Font Awesome-Symbol.',

	// Notes
	'JUMPBOX_DISPLAY_DEACTIVATED'		=> 'The Setting <strong>"Enable display of jumpbox"</strong> is under <a href="%1$s">Load settings</a> deactivated!',
	'JUMPBOX_SETTINGS_UPDATED'			=> '%1$s%2$s %3$s',
	'JUMPBOXINDEX_VERSION_COPY'			=> 'phpBB Extension - %1$s- Version %2$s - &copy; <a href="https://reyno41.bplaced.net/phpbb">Kirk</a>',
]);
