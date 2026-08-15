/* acp_jumpboxindex.js
---------------------- */

'use strict';

jumpboxindex.setConfig = function () {
	const enabled = "1.0";
	const disabled = "0.35";
	const enabled_jumpbox_ucp = "inline-block";
	const disabled_jumpbox_ucp = "none";

	document.getElementById("opt_jumpbox_font_icon_jumpbox_default").style.opacity = (!document.getElementById("jumpbox_position_navbar_top").selected && (!document.getElementById("opt_jumpbox_font_icon_jumpbox_default").selected && !document.getElementById("jumpbox_position_navbar_bottom").selected)) ? enabled : disabled;
	document.getElementById("opt_jumpbox_ucp_yes").style.display = (document.getElementById("jumpbox_ucp_no").checked) ? enabled_jumpbox_ucp : disabled_jumpbox_ucp;
	document.getElementById("opt_jumpbox_ucp_no").style.display = (document.getElementById("jumpbox_ucp_yes").checked) ? enabled_jumpbox_ucp : disabled_jumpbox_ucp;
	document.getElementById("opt_jumpboxindex_default").style.display = (document.getElementById("jumpbox_ucp_no").checked) ? enabled_jumpbox_ucp : disabled_jumpbox_ucp;
	document.getElementById("opt_jumpbox_default").style.display = (document.getElementById("jumpbox_ucp_yes").checked) ? enabled_jumpbox_ucp : disabled_jumpbox_ucp;
};

jumpboxindex.customFormReset = function () {
	document.getElementById("acp_jumpboxindex").reset();
	jumpboxindex.setConfig();
};

	$('#jb_font_icon').on('keyup blur', function() {
		var input = $(this).val();
		var $fa_icon = $(this).next('span');
		$fa_icon.attr('class', 'icon ' + input);
	});

window.onload = jumpboxindex.setConfig();
