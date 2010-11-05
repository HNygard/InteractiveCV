
function toggle_description (something)
{
	$(something).
		parent().parent().parent().
	children('ul').children('.description_long').slideToggle();
	$(something).children('span').toggle();
}

$(document).ready(function() {
	$("div.job_readmore").click(function() {
		toggle_description(this);
	});
	
	$("div.job_readmore").each(function() {
		toggle_description(this);
	});
});
