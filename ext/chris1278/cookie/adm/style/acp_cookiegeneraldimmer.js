/* cookiegeneraldimmer.js
------------------------------------*/

var cookiegeneraldimmer= {};

cookiegeneraldimmer.setConfig = function () {
	'use strict';
	const enabled = "1.0";
	const disabled = "0.35";

	$('#dim_opt_klarostyleposition').css('opacity', (
		$('select[name="klarostylewidth"]').prop('value') == 'small'
		) ? enabled : disabled
	);
};

cookiegeneraldimmer.setstyleDefaults = function () {
	'use strict';
	$('input[name="cookie_icon_selection"][value="1"]'		).prop('checked',	true);
	$('select[name="klarostylecolor"]'						).prop('value',		'dark');
	$('select[name="klarostylewidth"]'						).prop('value',		'small');
	$('select[name="klarostyleposition"]'					).prop('value',		'bottomright');
	$('input[name="window_fix_in_the_middle"][value="0"]'	).prop('checked',	true);
	$('input[name="window_position"][value="1"]'			).prop('checked',	true);
	$('input[name="klaro_hidden_windows"][value="1"]'		).prop('checked',	true);
	cookiegeneraldimmer.setConfig();
};

cookiegeneraldimmer.setsettingsDefaults = function (){
	'use strict';

	$('input[name="name_of_cookie"]'						).prop('value',		'klaro');
	$('input[name="klaro_div_container"]'					).prop('value',		'klaro');
	$('select[name="storage_version"]'						).prop('value',		'cookie');
	$('input[name="html_code_processing"][value="1"]'		).prop('checked',	true);
	$('input[name="group_formation"][value="1"]'			).prop('checked',	true);
	$('input[name="save_all_button"][value="1"]'			).prop('checked',	true);
	$('input[name="cookie_runtime"]'						).prop('value',		'120');
	$('input[name="show_decline_button"][value="1"]'		).prop('checked',	true);
	$('input[name="to_the_cookie_settings"][value="1"]'		).prop('checked',	true);
	$('input[name="klaro_note"][value="1"]'					).prop('checked',	true);
	cookiegeneraldimmer.setConfig();
}

cookiegeneraldimmer.customFormReset = function () {
	'use strict';

	$('#cookie_general').trigger("reset");

	cookiegeneraldimmer.setConfig();
};

$(window).ready(function() {
	'use strict';

	cookiegeneraldimmer.setConfig();
	$('select[name="klarostylewidth"]'	).on('change'	, cookiegeneraldimmer.setConfig);
	$('input[name="form_reset"]'		).on('click'	, cookiegeneraldimmer.customFormReset);
});
