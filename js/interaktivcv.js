

$(document).ready(function() {
	$(".job").click(function() {
		$(this).children('ul').children('.description_long').slideToggle();
	});
});
