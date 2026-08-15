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
	'UCP_DSGVO_OVERVIEW_EXPLAIN'			=> 'In this section you can download the information stored about you in accordance with the GDPR General Data Protection Regulation. <br> <br> So that you also know what the individual points in the files mean, you will find an explanation here.',
	'DSGVO_INFO_BOX'						=> 'Information:',
	'DSGVO_INFO_BOX_EXPLAIN'				=> 'This is information regarding the opening of the used file format <b>"CSV"</b>. In many programs it happens that these umlauts such as <b class="redcolor-b">ä/ö/ü</b> or the sharp s (<b class="redcolor-b">ß</b>) do not display correctly. It is essential to ensure that the CSV file is opened or imported in <b class="redcolor-b">UTF-8</b>. This works pretty well with the "OpenOffice Calc" program, for example, but it also works pretty well using the Excel import function from Office 365. If the file is opened with "OpenOffice Calc", the program asks directly for the character format. Usually it is enough to select the Unicode (UTF-8) from the list and open the file.',
	'DSGVO_PROF_INFO'						=> 'If you download the profile data, you can see which information is included here:',
	'DSGVO_DATA_INFO'						=> 'When you download the forum content, you can see what information is included here:',
	'UCP_VALUE'								=> 'Value',
	'UCP_INFO'								=> 'Explanations',
	'UCP_USER_ID'							=> 'user_id',
	'UCP_USER_ID_EXPLAIN'					=> 'A fixed number as an identification number for the user.',
	'UCP_USER_IP'							=> 'user_ip',
	'UCP_USER_IP_EXPLAIN'					=> 'The IP that the user had when he registered.',
	'UCP_USER_REGDATE'						=> 'user_regdate',
	'UCP_USER_REGDATE_EXPLAIN'				=> 'The date on which the user registered.',
	'UCP_USER_EMAIL'						=> 'user_email ',
	'UCP_USER_EMAIL_EXPLAIN'				=> 'The email address that was used when registering.',
	'UCP_USER_LASTVISIT'					=> 'user_lastvisit',
	'UCP_USER_LASTVISIT_EXPLAIN'			=> 'The date and time when the user was last logged into the forum.',
	'UCP_USER_POST'							=> 'user_posts',
	'UCP_USER_POST_EXPLAIN'					=> 'The number of posts the user has written.',
	'UCP_USER_LANG'							=> 'user_lang',
	'UCP_USER_LANG_EXPLAIN'					=> 'The abbreviation for the language that the user has set for himself e.g. de - Deutsch (Du), en - English, de_x_sie - Deutsch Sie(formal).',
	'UCP_USER_TIMEZONE'						=> 'user_timezone',
	'UCP_USER_TIMEZONE_EXPLAIN'				=> 'The time zone that the user has set.',
	'UCP_USER_DATEFORMAT'					=> 'user_dateformat',
	'UCP_USER_DATEFORMAT_EXPLAIN'			=> 'The format of the date set by the user.',
	'UCP_USER_AVATAR'						=> 'user_avatar',
	'UCP_USER_AVATAR_EXPLAIN'				=> 'The file name under which the forum has saved the user´s avatar is displayed here, but that also depends on whether the authorization allows an avatar or not.',
	'UCP_USER_SIG'							=> 'user_sig',
	'UCP_USER_SIG_EXPLAIN'					=> 'The signature that the user created.',
	'UCP_USER_JABBER'						=> 'user_jabber',
	'UCP_USER_JABBER_EXPLAIN'				=> 'If authorized and set for the use of the user, the Jaber designation / identifier is shown here.',
	'UCP_POST_ID'							=> 'post_id',
	'UCP_POST_ID_EXPLAIN'					=> 'A unique identification number for the contribution individually assigned by the forum.',
	'UCP_TOPIC_ID'							=> 'topic_id',
	'UCP_TOPIC_ID_EXPLAIN'					=> 'A unique identification number for the topic individually assigned by the forum.',
	'UCP_FORUM_ID'							=> 'forum_id',
	'UCP_FORUM_ID_EXPLAIN'					=> 'The ID of the forum in which the topic / post was posted.',
	'UCP_POSTER_IP'							=> 'poster_ip',
	'UCP_POSTER_IP_EXPLAIN'					=> 'The Ip of the post creator with which he was logged into the forum at the time of creation.',
	'UCP_POST_TIME'							=> 'post_time',
	'UCP_POST_TIME_EXPLAIN'					=> 'The date and time when the entry was created.',
	'UCP_POST_SUBJECT'						=> 'post_subject',
	'UCP_POST_SUBJECT_EXPLAIN'				=> 'The name or subject of the topic in which the post was posted.',
	'UCP_POST_TEXT'							=> 'post_text',
	'UCP_POST_TEXT_EXPLAIN'					=> 'The written post.',
]);
