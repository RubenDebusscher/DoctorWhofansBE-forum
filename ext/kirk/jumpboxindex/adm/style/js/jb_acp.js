/* jb_acp.js
------------ */

(function($) { // Avoid conflicts with other libraries

'use strict';

var constants = Object.freeze({
	DispJumpboxPosition_top		: 1,
	DispJumpboxPosition_bottom	: 4,

	OpacityEnabled				: '1',
	OpacityDisabled				: '.35'
});

function setConfig() {
	var jb = constants;

	$('#jumpbox_font_icon').css('opacity', (
			$('input[name="jumpbox_default"]').prop('checked') === true
		) ? jb.OpacityDisabled : jb.OpacityEnabled
	);
}

function customFormReset() {
	$('#acp_jumpboxindex').trigger("reset");
	setConfig();
}

function iconPreview() {
	var input = $(this).val();
	var $fa_icon = $(this).next('span');

	$fa_icon.attr('class', 'icon ' + input);
}

$(window).ready(function() {
	setConfig();

	$('input[name="jumpbox_default"]'		).on('change',		setConfig);
	$('input[name="jumpbox_ucp"]'			).on('change',		setConfig);
	$('select[name="jumpbox_position"]'		).on('change',		setConfig);
	$('#jb_font_icon'						).on('keyup blur',	iconPreview);
	$('input[name="form_reset"]'			).on('click',		customFormReset);
});

})(jQuery); // Avoid conflicts with other libraries
