
function toggle_job_description (something)
{
	$(something).
		parent().parent().parent().
	children('ul').children('.description_long').slideToggle();
	$(something).children('span').toggle();
}
function toggle_contact_viewmore (something)
{
	$("div.contact_info_viewmore").slideToggle();
	$(something).children('span').toggle();
}

$(document).ready(function() {
	$("div.job_readmore").click(function() {
		toggle_job_description(this);
	});
	
	$("div.job_readmore").each(function() {
		toggle_job_description(this);
	});
	
	$("div.contact_readmore").click(function() {
		toggle_contact_viewmore(this);
	});
	
	$("div.contact_readmore").each(function() {
		toggle_contact_viewmore(this);
	});
});
