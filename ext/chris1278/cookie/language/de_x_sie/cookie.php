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
	'NO_JAVA_SKRIPT_INFO'		=> 'Dieses Forum verwendet einen Cookie-Content Manager der auf JavaScript basiert. Bitte aktivieren Sie dies in Ihrem Browser.',
	'TRUE'						=> 'true',
	'FALSE'						=> 'false',
	'ALL_ACCEPT'				=> 'Alle Akzeptieren',
	'ACCEPT'					=> 'Akzeptieren',
	'ACCEPT_SELECTED'			=> 'Ausgewählte akzeptieren',
	'DECLINE'					=> 'Ablehnen',
	'SAVE'						=> 'Speichern',
	'CLOSE'						=> 'Schließen',
	'POWERD_BY'					=> 'Realisiert mit Klaro!',
	'FIRST_INFOS'				=> 'Um bestimmte Funktionen nutzen zu können sind ein paar Einstellungen nötig. Damit wird gesteuert ob ein Dienst Cookies setzen darf oder nicht. Es werden Cookies gesetzt für folgende Dienste:<br><br>{purposes}. <br><br>Die Einstellungen können später zu jedem Zeitpunkt geändert werden.',
	'THE_COOKIE_SETTTINGS'		=> 'Zu den Cookie-Einstellungen',
	'ALL_SWITCH_EXPLAIN'		=> 'Mit diesem Schalter kannst Du alle Dienste aktivieren oder deaktivieren.',
	'ALL_SWITCH'				=> 'Alle Dienste aktivieren oder deaktivieren',
	'OPTOUT_INFO'				=> 'Diese Dienste werden standardmäßig geladen (Du kannst diese jedoch deaktivieren)',
	'KLARO_PURPOSE'				=> 'Zweck',
	'KLARO_PURPOSES'			=> 'Zwecke',
	'ALWAYS_REQUIRED_SERVICE'	=> 'Dieser Service ist immer erforderlich',
	'ALWAYS_REQUIRED'			=> '(immer erforderlich)',
	'KLARO_SERVICE'				=> 'Dienst',
	'KLARO_SERVICES'			=> 'Dienste',
	'SETTINGS_FOR_COOKIE'		=> 'Einstellungen für unsere Cookie´s',
	'FONTAWESOME_FOR_COOKIE'	=> '<i class="opt-in-cookie-icon cok_men"></i>',
	'SVG_FOR_COOKIE'			=> '<span id="cookie_svg"></span>',
	'NEW_LINE'					=> '<br>',
	'SECOND_INFOS'				=> 'Hier können die Einstellungen für Cookies vorgenommen werden die evtl. gesetzt werden.<br><br>Allgemeine Hinweise und Informationen können in unserer <a href="%1$s" target="_blank"><strong>Datenschutzerklärung</strong></a> bzw. <a href="%2$s" target="_blank"><strong>Nutzungsbedingungen</strong></a> eingesehen werden.',
	'COOKIES_MUST_HAVE'			=> 'Diese Cookies sind voreingestellte Werte und müssen akzeptiert werden, da diese für den Betrieb der Webseite erforderlich sind.',
	'TECHNICAL_COOKIES'			=> 'Technisch notwendige Cookies',
	'EXTERN_COOKIES_EXPLAIN'	=> 'Hier werden Optionen zur Auswahl gestellt die es ermöglichen Videos oder externe Medien direkt im Forum abspielbar zu machen.',
	'NEW_CHANGES'				=> 'Seit deinem letzten Besuch gab es Änderungen, bitte erneuere deine Zustimmung.',
	'EXTERN_COOKIES'			=> 'Externe Medien',
	'LOAD_EXTERNAL_CONTENT'		=> 'Möchtest Du externe Inhalte laden, die von {title} bereitgestellt werden?',
	'ALLOW_ONCE'				=> 'Einmalig erlauben',
	'PERMIT_PERMANENTLY'		=> 'Dauerhaft erlauben (Sie können die Einstellungen jederzeit ändern!)',
	'TOOLS'						=> 'Besucher-Statistiken',
	'TOOLS_COOKIES'				=> 'Hier können dienste ausgewählt werden die für die Erfassung von Besucher-Statistiken genutzt werden.',
	'YTCOM_VIDEOLINK_HELP'		=> '[youtube]Videolink[/youtube] - Für die Videos mit ganz normalen Youtube.com Links',
	'YTBE_VIDEOLINK_HELP'		=> '[youtube_be]Videolink[/youtube_be] - Für die Youtbe Short Links via https://youtu.be',
	'VIMEO_VIDEOLINK_HELP'		=> '[vimeo]Videolink[/vimeo] - Für die Videos von Vimeo.com',
	'SPOTIFY_VIDEOLINK_HELP'	=> '[spotify]Videolink[/spotify] - Für die Videos oder Wiedergabelisten von spotify.com',
	'ANOTHER_EXT'				=> 'Kompatible Erweiterungen',
	'ANOTHER_EXT_EXPLAIN'		=> 'Hier finden Sie Auswahlmöglichkeiten für kompatible Extensions',
	'OPT_IN_COKKIE_INFO'		=> 'Cookie-Einstellungen',
	'YOUTUBE_ADMIN'				=> 'Hier erscheint normalerweise ein Video von YouTube. Bitte wenden Sie sich an einen Administrator.',
	'VIMEO_ADMIN'				=> 'Hier erscheint normalerweise ein Video von Vimeo. Bitte wenden Sie sich an einen Administrator.',
	'SPOTIFY_ADMIN'				=> 'Hier erscheint normalerweise ein Video bzw. Wiedergabeliste von Spotify. Bitte wenden Sie sich an einen Administrator.',
	'COOKIE_TIME_YEAR'			=> '1 Jahr',
	'COOKIE_TIME_DAY'			=> 'Tag',
	'COOKIE_TIME_DAYS'			=> 'Tage',
	'EXTRA_SERVICE'				=> 'Zusätzliche Auswahlmöglichkeiten',
	'EXTRA_SERVICE_EXPLAIN'		=> 'Hier stehen weitere Funktionen zur Auswahl',
	/*
	* Danger. Important information regarding files for speech output. Please note the current format from here please Bkeep.
	* The individual files also contain html elements that are required to view the information on the switches or the formatting of the same.
	*/
	'CS_TECH_COOKIE'			=> 'Login, Session Foren-Cookies',
	'DS_TECH_COOKIE'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Phpbb Forum Cookies</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Eigentümer dieser Webseite %3$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Speichert Informationen in Cookies ab die durch die Forensoftware selber bereitgestellt werden auf dem Rechner des Benutzers. Dies sind Beispielsweise Session-Ids oder Login Informationen. Diese dient ausschliesslich der Komfortablen Nutzung des Forums.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">%1$s </label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie Laufzeit:</th>
														<td class="cookie_td">
															<label class="cookie_label">%2$s</label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_KLARO_COOKIE'			=> 'Klaro Cookie Content Manager',
	'DS_KLARO_COOKIE'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Klaro Cookies</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">%3$s - Benuzt wird ein Skript von <a href="https://heyklaro.com/" target="_blank">Klaro</a> welches Server-intern geladen wird.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Speichert die Einstellungen der Besucher, die in der Cookie Box von Klaro Cookies ausgewählt wurden.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">%1$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie Laufzeit:</th>
														<td class="cookie_td">
															<label class="cookie_label">%2$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://heyklaro.com/de/ressourcen/datenschutz" target="_blank">https://heyklaro.com/de/ressourcen/datenschutz</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_YOUTUBE'				=> 'Youtube',
	'DS_YOUTUBE'				=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Youtube BBCode</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Youtube Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter können Videos von YouTube die in Beiträgen eingebettet sind, angezeigt und abgespielt werden. Es können dabei auch Daten an YouTube bzw. Google gesendet werden.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://www.google.de/intl/de/policies/privacy" target="_blank">https://www.google.de/intl/de/policies/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_VIMEO'					=> 'Vimeo',
	'DS_VIMEO'					=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Vimeo BBCode</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Vimeo Inc.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter können Videos von vimeo.com die in Beiträgen eingebettet sind, angezeigt und abgespielt werden. Es können dabei auch Daten an vimeo.com gesendet werden.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://vimeo.com/privacy" target="_blank">https://vimeo.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_SPOTIFY'				=> 'Spotify',
	'DS_SPOTIFY'				=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Spotify BBCode</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Spotify AB, Schweden</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter können Wiedergabelisten oder Videos von Spotify.com die in Beiträgen eingebettet sind, angezeigt und abgespielt werden. Es können dabei auch Daten an Spotify.com gesendet werden.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://www.spotify.com/privacy" target="_blank">https://www.spotify.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_ANALYTICS'		=> 'Google Analytics',
	'DS_GOOGLE_ANALYTICS_NO_TM'	=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Analytics</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter wird der Service Google Analytics von Google geladen. Dies ist ein Service zur Erfassung von Besucher-Statistiken. Dabei werden Cookies angelegt und Daten an die Server von Google weitergeleitet.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_TRANSLATOR'		=> 'Google Translator',
	'DS_GOOGLE_TRANSLATOR'		=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Translator</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">
															Mit der Erlaubnis durch diesen Schalter können die Funktionen der Erweiterung mit der Funktion des Google Übersetzers genutzt werden. Dabei werden auch Daten mit den Servern von Google ausgetauscht.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_MATOMO'					=> 'Matomo Analytics',
	'DS_MATOMO_INTERN'			=> 'Mit der Erlaubnis durch diesen Schalter wird der Service Matomo Analytics geladen. Matomo Analytics ist ein einfacher Analytics-Service, welcher auf <b style="color: #00CC66">%1$s</b> betrieben wird. Dabei werden Cookies angelegt, aber es werden keine Daten an Dritte weitergegeben.',
	'DS_MATOMO_EXTERN'			=> 'Mit der Erlaubnis durch diesen Schalter wird der Service Matomo Analytics geladen. Matomo Analytics ist ein einfacher Analytics-Service, welcher extern auf einem der Server von <a href="https://matomo.org/" target="_blank"><b>https://matomo.org/</b></a> läuft. Dabei werden Cookies angelegt und Daten an die Server von Matomo weitergeleitet.',
	'MATOMO_DESCRIPTION'		=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Matomo Analytics</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">InnoCraft, New Zeeland</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">%1$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://matomo.org/privacy-policy/" target="_blank">https://matomo.org/privacy-policy/r</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_WEBFONT'			=> 'Google Webfont´s',
	'DS_GOOGLE_WEBFONT'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Webfont´s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter können Google Web Font Schriftarten direkt von Google bezogen werden. Dabei werden auch Daten mit den Servern von Google ausgetauscht.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_ADSENSE'			=> 'Google AdSense',
	'DS_GOOGLE_ADSENSE'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google AdSense</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter wird Werbung eingeblendet. Dabei werden auch Daten mit den Servern von Google ausgetauscht.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_MAPS'	=> 'Google Maps',
	'DS_GOOGLE_MAPS'	=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Maps</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter werden einträge zu Google Maps eingeblendet. Dabei werden auch Daten mit den Servern von Google ausgetauscht.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',
	'CS_AMAZON'					=> 'Amazon',
	'DS_AMAZON'					=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> Mehr informationen <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Amazon</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Anbieter:</th>
														<td class="cookie_td">
															<label class="cookie_label">Amazon Europe Core S.à r.l.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Zweck:</th>
														<td class="cookie_td">
															<label class="cookie_label">Mit der Erlaubnis durch diesen Schalter werden einträge von Amazon eingeblendet. Dabei werden auch Daten mit den Servern von Amazon ausgetauscht.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Datenschutzerklärung:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://www.amazon.de/gp/help/customer/display.html?nodeId=201909010&ref_=footer_privacy" target="_blank">https://www.amazon.de/gp/help/customer/display.html?nodeId=201909010&ref_=footer_privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',
]);
