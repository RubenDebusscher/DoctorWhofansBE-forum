<?php
/**
*
* Opt-In Cookie Manager by klaro Script extension for the phpBB Forum Software package.
* @copyright (c) 2020 (Christian-Esch.de) and Kirk https://reyno41.bplaced.net/phpbb
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

$lang = array_merge($lang, [
	'ACP_CM_GENERAL_PAGE_TITLE_EXPLAIN'				=> 'Hier können Sie die Allgemeinen Optionen Einstellen womit Sie bestimmen wie sich der Cookie-Manager verhalten soll. Dieser Bereich ist in zwei Abschnitte unterteilt. <br><br><b>1. Einstellungen Fensteroptik und Position</b><br><br>Dabei handelt es sich um die Möglichkeit die beiden Fenster die beim laden des Forums erscheinen zu beeinflussen. Diese bestehen je nach Auswahl entweder nur aus einem oder zwei Fenstern. In der Regel werden zwei Fenster geladen. Zuerst das Cookie-Hinweis Fenster von dem man dann in das Fenster Cookie-Einstellungen wechseln kann in dem dann die ganzen Schalter angezeigt werden (ja nach Auswahl der anzuzeigeneden Schalter).<br><br><b>2. Weitere Einstellungen</b><br><br>Hier können diverse Einstellungen bezüglich der Speichermethoden und Cookie Namen getätigt werden. ',
	'ACP_COOKIE_GENERAL_STYLE_OTPION'				=> 'Einstellungen Fensteroptik und Position',
	'ACP_COOKIE_GENERAL_STYLE_OTPION_EXPLAIN'		=> 'Hier können Sie Einstellen wie die Fenster des Cookie-Consent Manager aussehen sollen und welche Position diese haben sollen.<br><br><b>Information:</b> Hier ist bei den Optionen zu beachten das bestimmte Auswahlmöglichkeiten auch Einfluss auf andere Auswahlmöglichkeiten haben in dieser Kategorie.<br><br>',
	'COOKIE_ICON_SELECTION'							=> 'Symbol für das Cookie-Einstellung´s Fenster',
	'COOKIE_ICON_SELECTION_EXPLAIN'					=> 'Hier können Sie auswählen, ob Sie ein SVG-Icon im Fenster anzeigen lassen möchten oder ein Fontawesome-Icon. Bei dem Fenster wo das Icon zur Auswahl steht handelt es sich um das Cookie-Einstellung´s Fenster. Das Icon in der unteren Navigationsleiste bleibt davon unberührt.<br><br><b>Empfohlener Standard: </b> Fontawesome-Icon',
	'ACP_FONTAWESOME'								=> 'Fontawesome-Icon',
	'ACP_SVG'										=> 'SVG-Icon',
	'KLAROSTYLECOLOR'								=> 'Klaro Style (Dark/Hell Modus)',
	'KLAROSTYLECOLOR_EXPLAIN'						=> 'Hier können Sie auswählen ob Sie den Klaro Manager in einer Dunkeler Optik haben möchten oder in einer Hellen Optik.  Dies betrifft dann alle einblendungen des Cookie-Manager´s.<br><br><b>Empfohlener Standard: </b> Dunkel',
	'DARK'											=> 'Dunkel',
	'LIGHT'											=> 'Hell',
	'KLAROSTYLEWIDTH'								=> 'Breite des Cookie-Hinweis Fenster´s',
	'KLAROSTYLEWIDTH_EXPLAIN'						=> 'Hier kann ausgewählt werden ob das Fenster normal dargestellt wird so wie es Standard ist. Alternativ kann hier eine Optik gewählt werden die das Cookie-Hinweis Fenster dann auf der vollen Bildschirmbreite zeigt. Wenn die Auswahl Schmal gewählt wurde kann man das Cookie-Hinweis Fenster dann in eine der vier Ecken des Browser´s platzieren. Das Breite Format wird nur unten angezeigt.<br><br><b>Empfohlener Standard: </b> Anzeigenbreite Schmal',
	'ACP_WIDE'										=> 'Anzeigenbreite Breit',
	'ACP_SMALL'										=> 'Anzeigenbreite Schmal',
	'KLAROSTYLEPOSITION'							=> 'Anzeigeposition des schmalen Cookie-Hinweis Fenster',
	'KLAROSTYLEPOSITION_EXPLAIN'					=> 'Hier kann die Position des Cookie-Hinweis Fester´s eingestellt werden<br><br><b>Empfohlener Standard: </b> Unten Rechts',
	'ACP_TOP_LEFT_SMALL'							=> 'Oben Links',
	'ACP_TOP_RIGHT_SMALL'							=> 'Oben Rechts',
	'ACP_BOTTOM_LEFT_SMALL'							=> 'Unten Links',
	'ACP_BOTTOM_RIGHT_SMALL'						=> 'Unten Rechts',
	'ACP_STYLE_NOTE'								=> 'Die nachfolgenden Optionen ergeben je nach Auswahl unterschiedliche Fenster-Verhalten. Es wird jedoch Empfohlen dies bei den Empfohlenen Standard-Einstellungen zu belassen.',
	'WINDOW_FIX_IN_THE_MIDDLE'						=> 'Cookie-Hinweis Fenster mittig fixiert',
	'WINDOW_FIX_IN_THE_MIDDLE_EXPLAIN'				=> 'Mit dieser Option kann das Cookie Hinweis Fenster im Browser mittig geladen werden. Dann verhält es sich so wie das Cookie-Einstellung´s Fenster. Der Berecih um das Fenster kann dann erst wieder benutzt werden wenn man in dem Cookie-Hinweis Fenster eine Auswahl getroffen hat.<br><br><b>Empfohlener Standard: </b>Nein',
	'WINDOW_POSITION'								=> 'Auswahl des ersten Fensters was angezeigt werden soll',
	'WINDOW_POSITION_EXPLAIN'						=> 'Hier können Sie auswählen welches Fenster Sie beim laden zuerst anzeigen lassen möchten. Wenn Sie das <b>Cookie-Hinweis Fenster</b> zu erst laden möchten können Sie die Position und die Breite des Cookie-Hinweis Fenster´s über die Option <b>Breite des ersten Cookie-Hinweis Fenster´s</b> bestimmen. Wenn Sie direkt das <b>Cookie-Einstellung´s Fenster</b> laden wollen öffnet sich das Fenster direkt mittig im Browser welches die auszuwählenden Optionen angezeigt.<br><br><b>Empfohlener Standard: </b> Cookie Hinweis Fenster',
	'MIDDLE'										=> 'Cookie Einstellung´s Fenster',
	'DOWNRIGHT'										=> 'Cookie Hinweis Fenster',
	'KLARO_HIDDEN_WINDOWS'							=> 'Cookie-Hinweis Fenster und/oder Cookie-Einstellung´s Fenster Verstecken',
	'KLARO_HIDDEN_WINDOWS_EXPLAIN'					=> 'Mit dieser Option kann bei bestimmter Konstellation das bzw. die Fenster  unter dem Forum angezeigt werden. Es wird aber empfohlen diese Option nicht anzuwenden.<br><br><b>Empfohlener Standard: </b> Option nicht anwenden',
	'HIDDEN'										=> 'Option anwenden',
	'ALTERNATE'										=> 'Option nicht anwenden',
	'OICM_DEFAULTS'									=> 'Standardwert Einstellungen Fensteroptik und Position',
	'OICM_DEFAULTS_EXPLAIN'							=> 'Hier können Sie die Empfohlenen Standardwerte wieder einstellen für <b>Einstellungen Fensteroptik und Position</b>. Dazu einfach auf den Button <b>Empfohlene Standardwerte</b> drücken und dann Absenden.',
	'ACP_STYLE_DEFAULT'								=> 'Empfohlene Standardwerte',
	'ACP_GENERAL_INFO'								=> 'Es wird empfohlen die folgenden Optionen bei den Empfohlenen Standardeinstellungen zu belassen.',
	'ACP_COOKIE_GENERAL_SETTING_OTPION'				=> 'Weitere Einstellungen',
	'ACP_COOKIE_GENERAL_SETTING_OTPION_EXPLAIN'		=> '<b>Achtung:</b> Wähle hier die Einstellungen mit Bedacht.',
	'NAME_OF_COOKIE'								=> 'Name des Cookies',
	'NAME_OF_COOKIE_EXPLAIN'						=> 'Hier können Sie den Namen des Cookies angeben, unter dem der Cookie-Consent Manager die Einstellungen der Besucehr abspeichert.<br><br><b>Empfohlener Standard: </b>Klaro',
	'KLARO_DIV_CONTAINER'							=> 'Name des Klaro-Div Containers',
	'KLARO_DIV_CONTAINER_EXPLAIN'					=> 'Hier kann der Name des Div-Containers der beim Starten vom Cookie Manager beim Seitenaufruf erstellt wird angegeben werden. <br><br><b>Empfohlener Standard: </b> Klaro',
	'STORAGE_VERSION'								=> 'Speicher-Methode',
	'STORAGE_VERSION_EXPLAIN'						=> 'Hier kann ausgewählt werden ob man die Speicherung über Cookie (cookie) nutzen möchte oder ob die Daten Lokal gesspeichert (localStorage) werden sollen. Bei der Option <b>cookie</b> werden die Einstellungen die der Benutzer auswählt in einem Cookie auf dem Rechner des Besuchers hinterlegt. Bei der Option <b>localStorage</b> Werden die Einstellungen des Benutzers im Speicher des Browsers selber hinterlegt.<br><br><b>Empfohlener Standard: </b> cookie',
	'COOKIE'										=> 'cookie',
	'LOCALSTORAGE'									=> 'localStorage',
	'HTML_CODE_PROCESSING'							=> 'HTML-Code Verarbeitung',
	'HTML_CODE_PROCESSING_EXPLAIN'					=> 'Dieser Schalter sollte auf <b>phpbb-Kompatibel</b> stehen bleiben. Ansonsten werden die eingebauten Verlinkungen in dem ein oder anderen Text nicht als Link sondern als html-Code dargestellt.<br><br><b>Empfohlener Standard: </b>phpbb-Kompatibel',
	'KLARO'											=> 'Klaro Standard',
	'PHPBBKOMP'										=> 'phpbb-Kompatibel',
	'GROUP_FORMATION'								=> 'Gruppenbildung',
	'GROUP_FORMATION_EXPLAIN'				 		=> 'Ermöglicht es Dienste der selben zugehörigkeit in Gruppen zusammen zu fassen. <br><br><b>Empfohlener Standard: </b>Zu Gruppen zusammenfügen',
	'CM_GROUP'										=> 'Zu Gruppen zusammenfügen',
	'NO_CM_GROUP'									=> 'Dienste nicht in Gruppen sondern untereinander alle anzeigen',
	'SAVE_ALL_BUTTON'								=> 'Button <b>"Alles Speichern"</b> anzeigen',
	'SAVE_ALL_BUTTON_EXPLAIN'						=> 'Mit diesem Schalter können Sie den Button <b>"Alles Speichern"</b> deaktivieren.<br><br><b>Empfohlener Standard: </b>Ja',
	'COOKIE_RUNTIME'								=> 'Cookie-Laufzeit',
	'COOKIE_RUNTIME_EXPLAIN'						=> 'Mit diesem Wert können Sie angeben wieviele Tage das Cookie welches der Klaromanager setzt Gülltigkeit behält.<br><br><b> Empfohlener Standard: </b>120',
	'SHOW_DECLINE_BUTTON'							=> 'Button <b>"Ablehnen"</b> anzeigen',
	'SHOW_DECLINE_BUTTON_EXPLAIN'					=> 'Mit diesem Schalter können Sie den Button <b>"Ablehnen"</b> deaktivieren.<br><br><b>Empfohlener Standard: </b>Ja',
	'TO_THE_COOKIE_SETTINGS'						=> 'Zu den Cookie-Einstellungen',
	'TO_THE_COOKIE_SETTINGS_EXPLAIN'				=> 'Den Schriftzug <b>" Zu den Cookie-Einstellungen"</b> auf in dem Cookie-Hinweis Fenster anzeigen lasssen, welche sich immer lädt wenn noch keine Cookies bestätitgt worden sind oder es neue Cookies zu bestätigen gibt. <br><br><b>Empfohlener Standard: </b>Ja',
	'KLARO_NOTE'									=> 'Realized with Klaro!',
	'KLARO_NOTE_EXPLAIN'							=> 'Den Hinweis mit Verlinkung zur Klaro Homepage einbelden.<br><br><b>Anmerkung: </b>Da das Script kostenlos ist wird dies von Haus aus aktiviert. Der <a href="https://kiprotect.com/klaro" target="_blank"><b>Anbieter</b></a> des Scriptes stellt es dem Benutzer frei dieses zu deaktvieren. Um aber für sich Werbung zu machen, wird freundlichst darum gebeten dieses aktiv zu lassen.<br><br><b>Empfohlener Standard: </b>Ja',
	'OICM_SETTINGS_DEFAULTS'						=> 'Standardwert Einstellungen Weitere Einstellungen',
	'OICM_SETTINGS_DEFAULTS_EXPLAIN'				=> 'Hier können Sie die Empfohlenen Standardwerte wieder einstellen für <b>Weitere Einstellungen</b>. Dazu einfach auf den Button <b>Empfohlene Standardwerte</b> drücken und dann Absenden.',
	'ACP_SETTINGS_DEFAULT'							=> 'Empfohlene Standardwerte',
	'COOKIE_WARN'									=> 'Dies ist nur eine Information. Durch die Aktivierung dieser Erweiterung wird der Standard <b>„Cookie-Hinweis“</b>, der im Administrationsbereich unter<a href="%1$s"> <b>Serverkonfiguration/Cookies</b> </a> gesetzt werden kann, unterdrückt, wenn dieser aktiviert ist. Dies führt zu keiner Funktionseinschränkung. Nur das normalerweise angezeigte Banner wird nicht angezeigt. Die Cookie-Funktion dieses Forums wird in keiner Weise beeinträchtigt.',
]);
