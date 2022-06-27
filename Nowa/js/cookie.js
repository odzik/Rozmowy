$(document).ready(function () {
	var cook = $.cookie('IPCC');
	if (cook === undefined) {
		$("#cookie").fadeIn();
	}
	$("#cook").click(function () {
		$.cookie('IPCC', '1');
	});
});

function ChangeLang(lang) 
{
	$.cookie('lang', lang, {path: '/'});
	window.location.href = '../startowa.php';
}