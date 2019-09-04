// Main
$(function main() {
	console.group('docready');
	$('footer a').attr("target","_blank");
	detectDevice(WURFL.form_factor)
	// Home page
	if ($('body').is('.page--home')) {
		// initializeVideos();
	}
	// Video page
	if ($('body').is('.page--video')) {
		// loadMasterVideo();
	}
	// General info page
	// Catering Carousel
	$('#carousel-catering.carousel').carousel({
		interval: 3000
	});
	//FAQ Section script
	$('.question').on("click",function questionClickHandler() {
		$(this).next('.answer').slideToggle(200);
		$(this).toggleClass("expanded");
	});
	// Contact link
	// $('a#link_contact').attr("href","javascript:void(0)");
	// General info
	$('.catering .left_copy a').attr("rel","noopener noreferrer");
	$('.catering .left_copy a').attr("target","_blank");
	console.groupEnd();
});
