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
	'ACP_CM_SETTINGS_PAGE_TITLE_EXPLAIN'			=> 'Hier kannst Du die Einstellungen vornehmen um dein Skript anzupassen.<br><br>Wähle hier deine Optionen/Schalter aus welche deinen Besuchern beim Besuch deines Forums angezeigt werden sollen.<br><br>Bei einigen Schaltern besteht die Möglichkeit das Skript welches auf der Webseite dafür benötigt wird in der Datenbank zu hinterlegen.<br><br><b>Achtung: </b>Bitte achte darauf das du das jeweilige Skript korrekt eintragen tust und auch die Änderung zu der Kompatibilität dieser Extension herstellst <b>(sprich data-name"...")</b> damit das Skript auch entsprechend mit dem Cookie Manager gesteuert werden kann.<br><br>Wenn du Fragen hast bezüglich des Formats oder der Änderung  des Skriptes so kannst du in dem Support-Thema auf <a href="https://www.phpbb.de/community/viewtopic.php?t=245064" target="_blank"><b>phpbb.de</b></a> oder <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support" target="_blank"><b>phpbb.com</b></a> fragen.',
	'ACP_CM_SWITCH_SET_TITLE'						=> 'Anzuzeigende Schalter',
	'ACP_COOKIE_IMPRESSUM'							=> 'Impressum für die Infobox des Forums-Schalters',
	'ACP_COOKIE_IMPRESSUM_EXPLAIN'					=> 'Hier kannst du auswählen wie du dein Impressum generierst. Das ist dann der Link der in der Auswahl Box des Cookies in der Infobox für die Essentiellen Cookies des Forums inklusiver Verlinkung eingeblendet wird. Es wird Empfohlen dazu die Extension <a href="https://www.phpbb.com/customise/db/extension/about_us/" target="_blank"><b>About us von Crizzo</b></a> zu nutzen.<br><br><b>Notiz:</b> Diese Einstellung bezieht sich lediglich auf das verlinkte Impressum was in der Box zu dem fix Schalter für die Foren Cookies generiert wird. Dies hat keine Auswirkung auf andere Arten von einem Impressum z.B. about us von Crizzo.',
	'ACP_COOKIE_IMPRESSUM_INTERN_EXTERN'			=> 'Auswahl der Art des genutzten Impressum´s',
	'ACP_COOKIE_IMPRESSUM_INTERN_EXTERN_EXPLAIN'	=> 'Hier kannst du Auswählen was für eine Art Impressum du nutzt.',
	'COOKIE_IMPRESSUM_LINK_EXTERN'					=> 'Link für das Impressum',
	'COOKIE_IMPRESSUM_LINK_EXTERN_EXPLAIN'			=> 'Gebe hier bitte den vollständigen Link zum Impressum ein.<br><br><b>z.B. https://meine-domain.de/impressum.php</b>',
	'ACP_ABOUT_US_EXTENSION'						=> 'About us von Crizzo (Impressum´s Erweiterung)',
	'ACP_EXTERNER_LINK'								=> 'Eigenen Link für das Impressum',
	'ACP_NO_IMPRESSUM'								=> 'Kein Impressum',
	'ACP_MEDIA_SWITCHES'							=> 'Media-BBcodes',
	'YOUTUBE_BBCODE_SWITCH'							=> 'YouTube',
	'YOUTUBE_BBCODE_SWITCH_EXPLAIN'					=> 'Dieser Schalter ist für das erlauben/verbieten von YouTube Videos',
	'VIMEO_BBCODE_SWITCH'							=> 'Vimeo',
	'VIMEO_BBCODE_SWITCH_EXPLAIN'					=> 'Dieser Schalter ist für das erlauben/verbieten von Vimeo Videos',
	'SPOTIFY_BBCODE_SWITCH'							=> 'Spotify',
	'SPOTIFY_BBCODE_SWITCH_EXPLAIN'					=> 'Dieser Schalter ist für das erlauben/verbieten von Spotify Videos/Wiedergabelisten',
	'ACP_SWITCHES_WITH_SKRIPTS'						=> 'Schalter mit integrierten Skripten',
	'ACP_SWITCHES_WITH_SKRIPTS_EXPLAIN'				=> 'Bei den Schaltern in diesem Bereich sind die Skripte schon in dieser Extension hier integriert. Es können jedoch auch eigene Skripte genutzt werden die dann allerdings entsprechend angepasst werden müssen.',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER'				=> 'Google Analitycs ohne Tag Manger',
	'GOOGLE_ANALYTICS_NO_TAGMANAGER_EXPLAIN'		=> 'Dieser Schalter aktiviert den Cookie Switch <b>Google Analytics</b>. Du kannst für diesen Schalter entweder das Integrierte Skript nutzen oder ein eigenes Skript einbinden. Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b> Ansprechparameter für Google Analytics </b> . Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: data-name="WERT" Wobei das Wort Wert durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist.',
	'ACP_DATA_NAME_GOOGLEANALYTICS'					=> 'Ansprechparameter für Google Analytics',
	'ACP_DATA_NAME_GOOGLEANALYTICS_EXPLAIN'			=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
	'ACP_GANALYTICS_OWN_SCRIPT'						=> 'Eigenes Google Analytics Skript verwenden',
	'ACP_GANALYTICS_OWN_SCRIPT_EXPLAIN'				=> 'Diese Option kannst du auswählen, falls du ein eigenes Skript von Google Analytics verwenden möchtest. Denke aber auch daran den Ansprechparameter für das Skript mit einzubauen.',
	'GOOGLE_ANALYTICS_ID'							=> 'Google ID',
	'GOOGLE_ANALYTICS_ID_EXPLAIN'					=> 'Hier trage bitte deine Google-ID ein.',
	'ACP_GOOGLE_ANALYTICS_ID'						=> 'Beispiel für eine Google ID - G-8FK05BPM2N',
	'MATOMO_SWITCH'									=> 'Matomo-Analytics',
	'MATOMO_SWITCH_EXPLAIN'							=> 'Dieser Schalter aktiviert den Cookie Switch <a href="https://matomo.org" target="_blank"><b> Matomo-Analytics </b></a>. Du kannst für diesen Schalter entweder das Integrierte Skript nutzen oder ein eigenes Skript einbinden. Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b> Ansprechparameter für Matomo </b> . Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: data-name="WERT" Wobei das Wort Wert durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist.',
	'ACP_DATA_NAME_MATOMO'							=> 'Ansprechparameter für Matomo',
	'ACP_DATA_NAME_MATOMO_EXPLAIN'					=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
	'ACP_MATOMO_OWN_SCRIPT'							=> 'Eigenes Matomo Skript verwenden',
	'ACP_MATOMO_OWN_SCRIPT_EXPLAIN'					=> 'Diese Option kannst du auswählen, falls du ein eigenes Skript von Matomo verwenden möchtest. Denke aber auch daran den Ansprechparameter für das Skript mit einzubauen.',
	'MATOMO_URL'									=> 'Matomo URL/ID',
	'MATOMO_URL_EXPLAIN'							=> 'Hier bitte die Matomo Url eingeben.<br><br> Die Url bitte ohne führendes <b>https://</b> und ohne abschliessendes <b>/</b> eingeben. <br><br>Um den richtigen Eintrag zu finden suche bitte im Trackingcode folgende <br>Zeile:<b> var u="https://namevonmatomo.matomo.cloud/";</b> und daraus trage dann bitte <b>namevonmatomo.matomo.cloud</b> als Url hier ein.',
	'MATOMO_SIDE_ID'								=> 'Side id',
	'MATOMO_SIDE_ID_EXPLAIN'						=> 'Hier bitte die <b>setSiteId</b> eintragen.<br><br>Diese ist im Trackingcode zu finden. Finde die Zeile: <b>_paq.push([\'setSiteId\', \'1\']);</b> Die Zahl die zwischen den Hochkommas steht ist die einzutragende Ziffer. Wenn du nur eine Seite haben solltest die du nutzen tust dann kannst du das Feld leer lassen (dann wird automatisch eine 1 als id eingesetzt) oder einfach die 1 als Wert eintragen.',
	'MATOMO_IN_OUT'									=> 'Matomo Skript Anwendung',
	'MATOMO_IN_OUT_EXPLAIN'							=> 'Hier kannst du die Art auswählen wie das Skript verarbeitet wird.<br><br>Bei der Option <b>Matomo Externe Anwendung</b> wird davon ausgegangen das du lediglich das Skript von Matomo nutzen tust aber die Auswertung der Statistik direkt von Matomo.org übernommen wird.<br><br>Bei der Option <b>Matomo Interne Anwendung</b> wird davon ausgegangen das die komplette Skript-Anwendung auf deinem Server/Webspace liegt.',
	'ACP_MATOMO_EXTERN'								=> 'Matomo Externe Anwendung',
	'ACP_MATOMO_INTERN'								=> 'Matomo Interne Anwendung',
	'ACP_SWITCHES_WITHOUT_SKRIPTS'					=> 'Schalter ohne integrierte Skripte',
	'ACP_SWITCHES_WITHOUT_SKRIPTS_EXPLAIN'			=> 'Bei den Schaltern in diesem Bereich sind die Skripte nicht in dieser Extension hier integriert. Hiermit werden lediglich die entsprechenden Schalter zur Verfügung gestellt. Die dazugehöhrigen Skripte müssen selber eingebunden werden. Auch hier ist zu beachten das der Ansprechparameter entsprechend mit eingebunden werden muss.',
	'ACP_GOOGLE_WEBFONT_SWITCH'						=> 'Google Webfont',
	'ACP_GOOGLE_WEBFONT_SWITCH_EXPLAIN'				=> 'Dieser Schalter aktiviert den Cookie Switch <b>Google Webfont</b>. Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b>Ansprechparameter für Google Webfont´s </b>. Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: <b>data-name="WERT"</b> Wobei das Wort <b>Wert</b> durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist.<br><br><b>Wichtig:</b><br>Bitte dazu unbedingt <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726?p=844191&sid=64035e3ba12e9dbce6435b1d4cf49c5a#p844191" target="_blank"><b>>>> Hier<<<</b></a> die entsprechende Anleitung durchlesen.',
	'ACP_DATA_NAME_GOOGLEWEBFONT'					=> 'Ansprechparameter für Google Webfont´s',
	'ACP_DATA_NAME_GOOGLEWEBFONT_EXPLAIN'			=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
	'ACP_GOOGLE_ADSENSE_SWITCH'						=> 'Advertisement Management Extension (Google AdSense)',
	'ACP_GOOGLE_ADSENSE_SWITCH_EXPLAIN'				=> 'Dieser Schalter aktiviert den Cookie Switch <b>Google AdSense</b> für <a href="https://www.phpbb.com/customise/db/extension/ads/" target="_blank"><b>Advertisement Management</b></a>.  Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b>Ansprechparameter für Google AdSense </b>. Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: <b>data-name="WERT"</b> Wobei das Wort <b>Wert</b> durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist..<br><br><b>Wichtig:</b><br>Bitte dazu unbedingt <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726" target="_blank"><b>>>> Hier<<<</b></a> die entsprechende Anleitung durchlesen.',
	'ACP_DATA_NAME_GOOGLEADSENSE'					=> 'Ansprechparameter für Google AdSense',
	'ACP_DATA_NAME_GOOGLEADSENSE_EXPLAIN'			=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
	'ACP_GOOGLE_MAPS_SWITCH'						=> 'Google-Maps',
	'ACP_GOOGLE_MAPS_SWITCH_EXPLAIN'				=> 'Dieser Schalter aktiviert den Cookie Switch <b>Google Maps</b>. Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b>Ansprechparameter für Google Maps </b>. Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: <b>data-name="WERT"</b> Wobei das Wort <b>Wert</b> durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist.<br><br><b>Wichtig:</b><br>Bitte dazu unbedingt <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726" target="_blank"><b>>>> Hier<<<</b></a> die entsprechende Anleitung durchlesen.',
	'ACP_DATA_NAME_GOOGLEMAPS'						=> 'Ansprechparameter für Google Maps',
	'ACP_DATA_NAME_GOOGLEMAPS_EXPLAIN'				=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
	'GOOGLE_TRANSLATOR_SWITCH'						=> 'Google Translator',
	'GOOGLE_TRANSLATOR_SWITCH_EXPLAIN'				=> 'Dieser Schalter aktiviert den Cookie Switch <b>Google Translator</b> Extension von HiFiKabin. Man kann dies auch nutzen wenn man Google Translator Skript selber einbauen möchte. Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b> Ansprechparameter für Google Translator </b> . Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: data-name="WERT" Wobei das Wort Wert durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist.<br><br><b>Wichtig:</b><br>Bitte dazu unbedingt <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726?p=844736#p844736" target="_blank"><b> >>> Hier<<< </b></a>die entsprechende Anleitung durchlesen.',
	'ACP_DATA_NAME_GOOGLETRANSLATE'					=> 'Ansprechparameter für Google Translator',
	'ACP_DATA_NAME_GOOGLETRANSLATE_EXPLAIN'			=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
	'CM_COOKIE_UPDATE'								=> 'Die Opt-In Cookie Manager by klaro Script-Einstellungen wurden erfolgreich übernommen!',
	'ACP_GOAS_POS1'									=> 'Google Analytics ohne Tag Manger Skript für den Oberen html Bereich',
	'ACP_GOAS_POS1_EXPLAIN'							=> 'Sofern das Skript relativ zu Beginn des Seitenaufbaus geladen werden muss, kannst du den Teil des Java Skriptes hier eintragen welches du von Google zum einbinden bekommen hast.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_GOAS_POS2'									=> 'Google Analytics ohne Tag Manger Skript für den Unteren html Bereich',
	'ACP_GOAS_POS2_EXPLAIN'							=> 'Sofern das Skript relativ zum Schluss des Seitenaufbaus geladen werden muss, kannst du den Teil des Java Skriptes hier eintragen welches du von Google zum einbinden bekommen hast.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_MATOMO_POS1'								=> 'Matomo-Analytics Skript für den Oberen html Bereich',
	'ACP_MATOMO_POS1_EXPLAIN'						=> 'Sofern das Skript relativ zu Beginn des Seitenaufbaus geladen werden muss, kannst du den Teil des Java Skriptes hier eintragen welches du von Matomo-Analytics zum einbinden bekommen hast.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_MATOMO_POS2'								=> 'Matomo-Analytics für den Unteren html Bereich',
	'ACP_MATOMO_POS2_EXPLAIN'						=> 'Sofern das Skript relativ zum Schluss des Seitenaufbaus geladen werden muss, kannst du den Teil des Java Skriptes hier eintragen welches du von Matomo-Analytics zum einbinden bekommen hast.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_GOADS_POS1'								=> 'Advertisement Management Extension (Google AdSense) Skript für den Oberen html Bereich',
	'ACP_GOADS_POS1_EXPLAIN'						=> 'Hier kannst du Java Skript von Google AdSense eintragen sofern dies relativ zu Beginn des Seitenaufbaus geladen werden soll.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_GOADS_POS2'								=> 'Advertisement Management Extension (Google AdSense) Skript für den Unteren html Bereich',
	'ACP_GOADS_POS2_EXPLAIN'						=> 'Hier kannst du Java Skript von Google AdSense eintragen sofern dies relativ zum  Schluss des Seitenaufbaus geladen werden soll.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_GOMAPS_POS1'								=> 'Google-Maps Skript für den Oberen html Bereich',
	'ACP_GOMAPS_POS1_EXPLAIN'						=> 'Sollte für die Einbindung der Google Maps Kartenansicht ein Skript nötig sein welches relativ zu Beginn des Seitenaufbaus geladen werden muss, so kannst du dies hier Eintragen.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'ACP_GOMAPS_POS2'								=> 'Google-Maps für den Unteren html Bereich',
	'ACP_GOMAPS_POS2_EXPLAIN'						=> 'Sollte für die Einbindung der Google Maps Kartenansicht ein Skript nötig sein welches relativ zum Schluss des Seitenaufbaus geladen werden muss, so kannst du dies hier Eintragen.<br><br><b>Information:</b><br>Sollte kein Skript an dieser Stelle gebraucht werden das Feld einfach leer lassen.',
	'AMAZON_SWITCH'									=> 'Amazon Switch',
	'AMAZON_SWITCH_EXPLAIN'							=> 'Dieser Schalter aktiviert den Cookie Switch für <b>Amazon Werbung</b>. Das data-name-tag um die Skripte mit diesem Schalter kompatibel zu machen findest du in der Option <b>Ansprechparameter für Amazon</b>. Den Wert der dort enthalten ist dann bitte für das Skript entsprechend in diesem Format nutzen: data-name="WERT" Wobei das Wort Wert durch den Wert des entsprechenden Ansprechparameter zu ersetzen ist.<br><br><b>Wichtig:</b><br>Bitte dazu unbedingt <a href="https://www.phpbb.com/customise/db/extension/opt_in_cookie_manager/support/topic/238726?p=843751&sid=3d5e580f28601112b8deb6616b18f5b9#p843751" target="_blank"><b>>>> Hier<<<</b></a> die entsprechende Anleitung durchlesen.',
	'ACP_DATA_NAME_AMAZON'							=> 'Ansprechparameter für Amazon',
	'ACP_DATA_NAME_AMAZON_EXPLAIN'					=> 'Hier kannst du den Wert eintragen der für die Anpassung des Skriptes verwendet werden soll. Dieser ist dann als <b>data-name="..."</b> in das Skript einzufügen. Damit wird das Skript dann kompatibel mit dem Schalter dieser Extension.',
]);
