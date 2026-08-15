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
	'UCP_DSGVO_OVERVIEW_EXPLAIN'			=> 'In dieser Rubrik kannst du dir gemäß der DSGVO-Datenschutzgrundverordnung die über dich gespeicherten Informationen herunterladen.<br><br>Damit du auch weist was die einzelnen Punkte in den Dateien bedeuten, findest du hier eine Erklärung dazu.',
	'DSGVO_INFO_BOX'						=> 'Information:',
	'DSGVO_INFO_BOX_EXPLAIN'				=> 'Dies ist eine Information  bezüglich des Öffnens von dem benutzten Dateiformat <b>"CSV"</b>. Es kommt bei vielen Programmen vor das diese die Umlaute wie <b class="redcolor-b">ä/ö/ü</b> oder das scharfe s (<b class="redcolor-b">ß</b>) nicht korrekt darstellen. Es muss zwingend dabei beachtet werden, das die CSV-Datei im <b class="redcolor-b">UTF-8</b> geöffnet bzw. Importiert wird. Dies funktioniert beispielsweise mit dem Programme "OpenOffice  Calc" recht gut aber auch mittels der Import Funktion von Excel aus dem Office 365 funktioniert das recht gut. Wenn die Datei mit "OpenOffice Calc" geöffnet wird, fragt das Programm direkt nach dem Zeichenformat. In der Regel reicht es wenn man aus der Liste das Unicode (UTF-8) auswählt und die Datei öffnet.',
	'DSGVO_PROF_INFO'						=> 'Wenn du dir die Profil-Daten herunterlädst, kannst du hier sehen welche Informationen enthalten sind:',
	'DSGVO_DATA_INFO'						=> 'Wenn du dir die Foren-Inhalte herunterlädst, kannst du hier sehen welche Informationen enthalten sind:',
	'UCP_VALUE'								=> 'Wert',
	'UCP_INFO'								=> 'Erklärungen',
	'UCP_USER_ID'							=> 'user_id',
	'UCP_USER_ID_EXPLAIN'					=> 'Eine festgelegte Zahl als Identifikationsnummer für den Benutzer.',
	'UCP_USER_IP'							=> 'user_ip',
	'UCP_USER_IP_EXPLAIN'					=> 'Die IP die der Benutzer bei seiner Registrierung hatte.',
	'UCP_USER_REGDATE'						=> 'user_regdate',
	'UCP_USER_REGDATE_EXPLAIN'				=> 'Das Datum an dem der Benutzer sich registriert hat.',
	'UCP_USER_EMAIL'						=> 'user_email ',
	'UCP_USER_EMAIL_EXPLAIN'				=> 'Die E-Mail Adresse die bei Registrierung genutzt wurde.',
	'UCP_USER_LASTVISIT'					=> 'user_lastvisit',
	'UCP_USER_LASTVISIT_EXPLAIN'			=> 'Das Datum und Uhrzeit wann der Benutzer das letzte mal im Forum eingeloggt war.',
	'UCP_USER_POST'							=> 'user_posts',
	'UCP_USER_POST_EXPLAIN'					=> 'Die Anzahl an Beiträgen die der Benutzer geschrieben hat.',
	'UCP_USER_LANG'							=> 'user_lang',
	'UCP_USER_LANG_EXPLAIN'					=> 'Das Kürzel für die Sprache die der Benutzer für sich eingestellt hat z.B. de - Deutsch (Du), en - English, de_x_sie - Deutsch Sie(formal).',
	'UCP_USER_TIMEZONE'						=> 'user_timezone',
	'UCP_USER_TIMEZONE_EXPLAIN'				=> 'Die Zeitzone die der Benutzer eingestellt hat.',
	'UCP_USER_DATEFORMAT'					=> 'user_dateformat',
	'UCP_USER_DATEFORMAT_EXPLAIN'			=> 'Das Format des Datums welches der Benutzer eingestellt hat.',
	'UCP_USER_AVATAR'						=> 'user_avatar',
	'UCP_USER_AVATAR_EXPLAIN'				=> 'Hier wird der Dateiname angezeigt unter welchem das Forum den Avatar des Benutzers gespeichert hat, das hängt aber auch davon ab, ob die Berechtigung einen Avatar zulassen oder nicht.',
	'UCP_USER_SIG'							=> 'user_sig',
	'UCP_USER_SIG_EXPLAIN'					=> 'Die Signatur die der Benutzer angelegt hat.',
	'UCP_USER_JABBER'						=> 'user_jabber',
	'UCP_USER_JABBER_EXPLAIN'				=> 'Sofern berechtigt und eingestellt für die Benutzung der User steht hier die Jaber Bezeichnung/Kennung.',
	'UCP_POST_ID'							=> 'post_id',
	'UCP_POST_ID_EXPLAIN'					=> 'Eine vom Forum individuell vergebene einmalige Identifikationsnummer für den Beitrag.',
	'UCP_TOPIC_ID'							=> 'topic_id',
	'UCP_TOPIC_ID_EXPLAIN'					=> 'Eine vom Forum individuell vergebene einmalige Identifikationsnummer für das Thema.',
	'UCP_FORUM_ID'							=> 'forum_id',
	'UCP_FORUM_ID_EXPLAIN'					=> 'Die ID des Forums in welchem das Thema/der Beitrag gepostet wurde.',
	'UCP_POSTER_IP'							=> 'poster_ip',
	'UCP_POSTER_IP_EXPLAIN'					=> 'Die Ip des Beitragsersteller womit er zu dem Zeitpunkt des Erstellens im Forum eingeloggt war.',
	'UCP_POST_TIME'							=> 'post_time',
	'UCP_POST_TIME_EXPLAIN'					=> 'Das Datum und die Uhrzeit wann der Beitrag erstellt wurde.',
	'UCP_POST_SUBJECT'						=> 'post_subject',
	'UCP_POST_SUBJECT_EXPLAIN'				=> 'Der Name bzw. der Betreff des Themas in dem der Beitrag gepostet wurde.',
	'UCP_POST_TEXT'							=> 'post_text',
	'UCP_POST_TEXT_EXPLAIN'					=> 'Der geschrieben Beitrag.',
]);
