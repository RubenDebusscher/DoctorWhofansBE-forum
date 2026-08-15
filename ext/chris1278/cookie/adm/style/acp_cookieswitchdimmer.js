/* acp_cookieswitchdimmer.js
------------------------------------*/

var cookieswitchdimmer= {};

cookieswitchdimmer.setConfig = function () {
	'use strict';
	const enabled = "1.0";
	const disabled = "0.35";
	const displayon = "block";
	const displayoff = "none";

	// For Impressum
	$('#dim_cookie_impressum_link_extern').css('display', (
		$('select[name="cookie_impressum_intern_extern"]').prop('value') == 'cookie_imp_link'
		) ? displayon : displayoff
	);

	//For Google Analytics
	$('#dim_data_name_googleanalytics').css('opacity', (
			$('input[name="google_analytics_no_tm_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_google_analytics_os').css('opacity', (
			$('input[name="google_analytics_no_tm_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_gaos_pos1').css('opacity', (
			$('input[name="google_analytics_no_tm_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_gaos_pos2').css('opacity', (
			$('input[name="google_analytics_no_tm_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_google_analytics_id').css('opacity', (
			$('input[name="google_analytics_no_tm_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_gaos_pos1').css('display', (
			$('input[name="ganalytics_own_script"]').prop('checked') == true
		) ? displayon : displayoff
	);

	$('#dim_gaos_pos2').css('display', (
			$('input[name="ganalytics_own_script"]').prop('checked') == true
		) ? displayon : displayoff
	);

	$('#dim_google_analytics_id').css('display', (
			$('input[name="ganalytics_own_script"]').prop('checked') == false
		) ? displayon : displayoff
	);

	// For Matomo
	$('#dim_data_name_matomo').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_own_script').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_pos1').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_pos2').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_url').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_side_id').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_in_out').css('opacity', (
			$('input[name="matomo_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_matomo_pos1').css('display', (
			$('input[name="matomo_own_script"]').prop('checked') == true
		) ? displayon : displayoff
	);

	$('#dim_matomo_pos2').css('display', (
			$('input[name="matomo_own_script"]').prop('checked') == true
		) ? displayon : displayoff
	);

	$('#dim_matomo_url').css('display', (
			$('input[name="matomo_own_script"]').prop('checked') == false
		) ? displayon : displayoff
	);

	$('#dim_matomo_side_id').css('display', (
			$('input[name="matomo_own_script"]').prop('checked') == false
		) ? displayon : displayoff
	);

	// For Google Webfont
	$('#dim_data_name_googlewebfont').css('opacity', (
			$('input[name="google_webfont_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	// For Google Adsense
	$('#dim_data_name_googleadsense').css('opacity', (
			$('input[name="google_adsense_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_goads_pos1').css('opacity', (
			$('input[name="google_adsense_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_goads_pos2').css('opacity', (
			$('input[name="google_adsense_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	// For Google Maps
	$('#dim_data_name_googlemaps').css('opacity', (
			$('input[name="google_maps_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_gomaps_pos1').css('opacity', (
			$('input[name="google_maps_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	$('#dim_gomaps_pos2').css('opacity', (
			$('input[name="google_maps_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	// For Google Translator
	$('#dim_data_name_googletranslate').css('opacity', (
			$('input[name="google_translator_switch"]').prop('checked') == true
		) ? enabled : disabled
	);

	// For Amazon switch$('#dim_data_name_googlemaps').css('opacity', (
	$('#dim_data_name_amazon').css('opacity', (
			$('input[name="amazon_switch"]').prop('checked') == true
		) ? enabled : disabled
	);
};

cookieswitchdimmer.customFormReset = function () {
	'use strict';

	$('#cookie_switches').trigger("reset");

	cookieswitchdimmer.setConfig();
};

$(window).ready(function() {
	'use strict';

	cookieswitchdimmer.setConfig();
	$('select[name="cookie_impressum_intern_extern"]'	).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="google_analytics_no_tm_switch"]'		).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="ganalytics_own_script"]'				).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="matomo_switch"]'						).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="matomo_own_script"]'					).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="google_webfont_switch"]'				).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="google_adsense_switch"]'				).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="google_maps_switch"]'				).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="google_translator_switch"]'			).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="amazon_switch"]'						).on('change'	, cookieswitchdimmer.setConfig);
	$('input[name="form_reset"]'						).on('click'	, cookieswitchdimmer.customFormReset);
});
