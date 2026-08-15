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
	'NO_JAVA_SKRIPT_INFO'		=> 'This forum uses a cookie content manager based on JavaScript. Please enable this in your browser.',
	'TRUE'						=> 'true',
	'FALSE'						=> 'false',
	'ALL_ACCEPT'				=> 'Accept All',
	'ACCEPT'					=> 'Accept',
	'ACCEPT_SELECTED'			=> 'Accept selected',
	'DECLINE'					=> 'Decline',
	'SAVE'						=> 'Save',
	'CLOSE'						=> 'Close',
	'POWERD_BY'					=> 'Realized with Klaro!',
	'FIRST_INFOS'				=> 'In order to be able to use certain functions, a few settings are necessary. This controls whether a service is allowed to set cookies or not. Cookies are set for the following services:<br><br>{purposes}. <br><br>The settings can be changed later at any time.',
	'THE_COOKIE_SETTTINGS'		=> 'To the Cookie-Settings',
	'ALL_SWITCH_EXPLAIN'		=> 'With this switch you can activate or deactivate all services.',
	'ALL_SWITCH'				=> 'Activate or deactivate all services',
	'OPTOUT_INFO'				=> 'These services are loaded by default (but you can disable them)',
	'KLARO_PURPOSE'				=> 'Purpose',
	'KLARO_PURPOSES'			=> 'Purposes',
	'ALWAYS_REQUIRED_SERVICE'	=> 'This service is always required!',
	'ALWAYS_REQUIRED'			=> '(always required)',
	'KLARO_SERVICE'				=> 'Service',
	'KLARO_SERVICES'			=> 'Services',
	'SETTINGS_FOR_COOKIE'		=> 'Settings for the Cookie´s',
	'FONTAWESOME_FOR_COOKIE'	=> '<i class="opt-in-cookie-icon cok_men"></i>',
	'SVG_FOR_COOKIE'			=> '<span id="cookie_svg"></span>',
	'NEW_LINE'					=> '<br>',
	'SECOND_INFOS'				=> 'The settings for cookies can be made here, which may be set.<br><br>General notes and information can be found in our <a href="%1$s" target="_blank"><strong>Privacy policy</strong></a> and <a href="%2$s" target="_blank"><strong> Terms of Use</strong></a>.',
	'COOKIES_MUST_HAVE'			=> 'These cookies are preset values and must be accepted as they are necessary for the website to operate.',
	'TECHNICAL_COOKIES'			=> 'Technically necessary cookies',
	'EXTERN_COOKIES_EXPLAIN'	=> 'Options are provided here that make it possible to play videos or external media directly in the forum.',
	'NEW_CHANGES'				=> 'There have been changes since your last visit, please renew your consent.',
	'EXTERN_COOKIES'			=> 'External Media',
	'LOAD_EXTERNAL_CONTENT'		=> 'Would you like to load external content provided by {title}?',
	'ALLOW_ONCE'				=> 'Allow once',
	'PERMIT_PERMANENTLY'		=> 'Permit permanently (you can change the settings at any time!)',
	'TOOLS'						=> 'Visitor Statistics',
	'TOOLS_COOKIES'				=> 'Services can be selected here that are used to collect visitor statistics.',
	'ANOTHER_EXT'				=> 'Compatible extensions',
	'ANOTHER_EXT_EXPLAIN'		=> 'Here you will find selection options for compatible extensions',
	'YTCOM_VIDEOLINK_HELP'		=> '[youtube]Videolink[/youtube] - For the videos with normal Youtube.com links',
	'YTBE_VIDEOLINK_HELP'		=> '[youtube_be]Videolink[/youtube_be] - For the Youtbe Short Links via https://youtu.be',
	'VIMEO_VIDEOLINK_HELP'		=> '[vimeo]Videolink[/vimeo] - For the videos from Vimeo.com',
	'SPOTIFY_VIDEOLINK_HELP'	=> '[spotify]Videolink[/spotify] - For the videos or Playlist from spotify.com',
	'OPT_IN_COKKIE_INFO'		=> 'Cookie-Settings',
	'YOUTUBE_ADMIN'				=> 'A video from YouTube usually appears here. Please contact an administrator.',
	'VIMEO_ADMIN'				=> 'A video from Vimeo usually appears here. Please contact an administrator.',
	'SPOTIFY_ADMIN'				=> 'A video or playlist from Spotify usually appears here. Please contact an administrator.',
	'COOKIE_TIME_YEAR'			=> '1 Year',
	'COOKIE_TIME_DAY'			=> 'day',
	'COOKIE_TIME_DAYS'			=> 'days',
	'EXTRA_SERVICE'				=> 'Additional Choices',
	'EXTRA_SERVICE_EXPLAIN'		=> 'There are other functions to choose from here',
	/*
	* Danger. Important information regarding files for speech output. Please note the current format from here please Bkeep.
	* The individual files also contain html elements that are required to view the information on the switches or the formatting of the same.
	*/
	'CS_TECH_COOKIE'			=> 'Login, Session Cookies',
	'DS_TECH_COOKIE'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Phpbb Forum Cookies</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Owner of this website %3$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">Stores information in cookies provided by the forum software itself on the user´s computer. These are, for example, session IDs or login information. This serves exclusively for the comfortable use of the forum.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">%1$s </label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie runtime:</th>
														<td class="cookie_td">
															<label class="cookie_label">%2$s</label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_KLARO_COOKIE'			=> 'Klaro Cookie Content Manager',
	'DS_KLARO_COOKIE'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Klaro Cookies</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">%3$s - A script from <a href="https://heyklaro.com/" target="_blank">Klaro</a> is used which is loaded internally on the server.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">Saves the settings of the visitors selected in the Klaro Cookies cookie box.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">%1$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Cookie runtime:</th>
														<td class="cookie_td">
															<label class="cookie_label">%2$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://heyklaro.com/resources/privacy" target="_blank">https://heyklaro.com/resources/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_YOUTUBE'				=> 'Youtube',
	'DS_YOUTUBE'				=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Youtube BBCode</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Youtube Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With permission from this switch, videos from YouTube embedded in posts can be viewed and played. Data can also be sent to YouTube or Google.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://www.google.de/intl/de/policies/privacy" target="_blank">https://www.google.de/intl/de/policies/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_VIMEO'					=> 'Vimeo',
	'DS_VIMEO'					=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Vimeo BBCode</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Vimeo Inc.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With permission from this switch, videos from vimeo.com embedded in posts can be viewed and played. Data can also be sent to vimeo.com.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://vimeo.com/privacy" target="_blank">https://vimeo.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_SPOTIFY'				=> 'Spotify',
	'DS_SPOTIFY'				=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Spotify BBCode</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Spotify AB, Schweden</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">Playlists or videos from Spotify.com embedded in posts can be viewed and played with permission from this switch. Data can also be sent to Spotify.com.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://www.spotify.com/privacy" target="_blank">https://www.spotify.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_ANALYTICS'		=> 'Google Analytics',
	'DS_GOOGLE_ANALYTICS_NO_TM'	=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Analytics</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With the permission of this switch, the Google Analytics service will be loaded by Google. This is a visitor statistics service. Cookies are created and data is forwarded to the Google servers.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_TRANSLATOR'		=> 'Google Translator',
	'DS_GOOGLE_TRANSLATOR'		=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Translator</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With the permission of this switch, the functions of the extension can be used with the Google Translate function. Data is also exchanged with the Google servers.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_MATOMO'					=> 'Matomo Analytics',
	'DS_MATOMO_INTERN'			=> 'With permission from this button, the Matomo Analytics service is loaded. Matomo Analytics is a simple analytics service operated on <b style="color: #00CC66">%1$s</b>. Cookies are created, but no data is passed on to third parties.',
	'DS_MATOMO_EXTERN'			=> 'With permission from this button, the Matomo Analytics service is loaded. Matomo Analytics is a simple analytics service that runs externally on one of the <a href="https://matomo.org/" target="_blank"><b>https://matomo.org/</b></a> servers. Cookies are created and data is forwarded to the Matomo servers.',
	'MATOMO_DESCRIPTION'		=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Matomo Analytics</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">InnoCraft, New Zeeland</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">%1$s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://matomo.org/privacy-policy/" target="_blank">https://matomo.org/privacy-policy/r</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_WEBFONT'			=> 'Google Webfont´s',
	'DS_GOOGLE_WEBFONT'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Webfont´s</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With permission from this switch, Google Web Font fonts can be obtained directly from Google. Data is also exchanged with the Google servers.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_ADSENSE'			=> 'Google AdSense',
	'DS_GOOGLE_ADSENSE'			=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google AdSense</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">Ads will be displayed with the permission of this switch. Data is also exchanged with the Google servers.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',

	'CS_GOOGLE_MAPS'	=> 'Google Maps',
	'DS_GOOGLE_MAPS'	=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Maps</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Google Ireland Limited</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With the permission of this switch, entries for Google Maps are displayed. Data is also exchanged with the Google servers.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://policies.google.com/privacy" target="_blank">https://policies.google.com/privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',
	'CS_AMAZON'					=> 'Amazon',
	'DS_AMAZON'					=> '<details>
										<summary class="collapsible_summary"><span class="cookie_arrow">&#9660;</span> >>> More information <<< <span class="cookie_arrow">&#9660;</span></summary><br>
											<table>
												<tbody class="cookie_tbody">
													<tr class="cookie_tr">
														<th class="cookie_th">Name:</th>
														<td class="cookie_td">
															<label class="cookie_label">Amazon</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Offerer:</th>
														<td class="cookie_td">
															<label class="cookie_label">Amazon Europe Core S.à r.l.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Purpose:</th>
														<td class="cookie_td">
															<label class="cookie_label">With the permission of this switch, entries for Amazon are displayed. Data is also exchanged with the Amazon servers.</label>
														</td>
													</tr>
													<tr class="cookie_tr">
														<th class="cookie_th">Privacy policy:</th>
														<td class="cookie_td">
															<label class="cookie_label"><a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=201909010&ref_=footer_privacy" target="_blank">https://www.amazon.com/gp/help/customer/display.html?nodeId=201909010&ref_=footer_privacy</a></label>
														</td>
													</tr>
												</tbody>
											</table>
									</details>',
]);
