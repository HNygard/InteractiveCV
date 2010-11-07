
function toggle_job_description (something)
{
	$(something).
		parent().parent().parent().
	children('ul').children('.description_long').slideToggle();
	$(something).children('span').toggle();
}
contact_viewmore_set = false;
function toggle_contact_viewmore (something)
{
	//$("div.contact_info_viewmore").slideToggle();
	/**/ 
	if(contact_viewmore_set)
		$("div.contact_info_viewmore").fadeIn();
	else
		$("div.contact_info_viewmore").fadeOut();
	/* */
	contact_viewmore_set = !contact_viewmore_set;
	$(something).children('span').toggle();
}
function toggle_general (something)
{
	$(something).
		parent().
		children("span.toggle_text").
		slideToggle();
	$(something).
		parent().
		children('span.toggle').
		children('span').
		toggle();
}

$(document).ready(function() {
	
	$("div.toggle span.toggle").click(function() {
		toggle_general(this);
	});
	
	$("div.toggle span.toggle").each(function() {
		toggle_general(this);
	});
	
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
	
	// Lightbox
	$('a.lightbox').lightBox();
});
