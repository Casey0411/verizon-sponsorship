$(function home() {
	if ($('body').is('.page--home')) {
		var imgDir = 'assets/img/'
		var phonePass = false;
		var isPhone = false;
		var ajaxCalled = 0;
		var stagePicsInPlace = 0;
		var hallPicsInPlace = 0;
		var galleryPicsInPlace = 0;
		var screeningPicsInPlace = 0;
		// Randomize the middle image
		var imgarray = new Array('auditorium-stage-table.jpg', 'audience.jpg');
		var spot = Math.floor(Math.random() * imgarray.length);
		$('.intro .jumbotron img.special').attr('src',
		imgDir + 'home/' + imgarray[spot]);
		// Destination for clicks
		var eventSpacesDest = $('#event_spaces').offset().top;
		var eventSpacesAlter = -4;
		eventSpacesDest = eventSpacesDest + eventSpacesAlter;

		// Scroll to Event Spaces section and set nav menu item as active
		function goToSpaces() {
			var $spacesLink = $('a#link_to_spaces');
			$('body, html').animate({ scrollTop: eventSpacesDest }, 800, function() {
				$spacesLink.addClass('site-nav-menu__link--active');
			});
		}

		// Click handler for each Event Space heading
		$('.btn-toggle-panel').on('click', function panelHeadingClickHandler() {
			console.log('panel-heading click');
			var thisPanel = $(this).parents('.panel-heading');
			console.log('this panel:',thisPanel)
			thisPanel.toggleClass('openPanel');
			if (thisPanel.hasClass('openPanel')) {
				var panelId = thisPanel.parents('section').attr('id');
				console.log('panel-heading id:',panelId);
				fetchPhotos(panelId);
				//scroll so that it is atop window
				var panelDest = thisPanel.offset().top;
				var destAlter = -50;
				panelDest = panelDest + destAlter;

				$('body, html').animate({
					scrollTop: panelDest
				},
				800);
			}
		});

		// Load each set of carousel photos for all event spaces
		function fetchPhotos(id) {
			// console.log('fetchPhotos',id)
			var directory = '';
			var filePath = 'content/spaces/' + directory + '/carousel.php';
			console.log('fetchPhotos',id,directory,filePath);
			// Load Stage photos
			if (id === 'thestage') {
				directory = 'stage';
				filePath = 'content/spaces/' + directory + '/carousel.php';
				if (stagePicsInPlace === 0) {
					loadCarousel(filePath, id);
					stagePicsInPlace++;
				}
			}
			// Load Hall photos
			else if (id === 'thehall') {
				directory = 'hall';
				filePath = 'content/spaces/' + directory + '/carousel.php';
				if (hallPicsInPlace === 0) {
					loadCarousel(filePath, id);
					hallPicsInPlace++;
				}
			}
			// Load Gallery photos
			else if (id === 'thegallery') {
				directory = 'lobby';
				filePath = 'content/spaces/' + directory + '/carousel.php';
				if (galleryPicsInPlace === 0) {
					loadCarousel(filePath, id);
					galleryPicsInPlace++;
				}
			}
			// Load Screening room photos
			else if (id === 'thescreeningroom') {
				directory = 'screening';
				filePath = 'content/spaces/' + directory + '/carousel.php';
				if (screeningPicsInPlace === 0) {
					loadCarousel(filePath, id);
					screeningPicsInPlace++;
				}
			}
		}

		/**
		 * Load gallery data to set up carousels for each Event Space
		 *
		 * @param {string} file The carousel.php containing the list of images to load into the carousel. Typically located at "content/spaces/[directory]/carousel.php"
		 * @param {string} id The name of the event space to load the carousel data for, such as "thestage"
		 */
		function loadCarousel(file, id) {
			// Loading indicator image
			var loader = '<img src="'+imgDir+'loading.gif" width="25" height="25"/> ';
			// Target Event Space
			var $target  = $('#'+ id);
			// Add loading image
			$target.find('.panel .tab-pane--gallery .container').html(loader);
			// Load gallery data
			$.get(file, function loadCarouselAjaxCallback(data) {
				// Add gallery data/markup for each gallery/carousel into proper Event Spaces' tab on homepage
				$target.find('.panel .tab-pane--gallery .container').html(data);
				// Add some classes to control appearance on mobile, where gallerys are not carousels, but instead a stacked gallery of images
				if ($('body').hasClass('phone')) {
					$target.find('.panel .tab-pane .container .carousel-inner')
						.addClass('space_images')
						.removeClass('carousel-inner');
				}
			});
		}

		// Expands an Event Space's panel when it's name is clicked in the intro text
		$('.intro_text a').on('click', function eventSpaceToggle() {
			var eventSpaceName = $(this).data('target');
			$('#' + eventSpaceName)
				.find('.btn-toggle-panel')
				.click();
		});

		// Make nav sticky once user scrolls past intro section
		// Set Event Spaces menu item have active appearance based on scroll position (above or below intro section)
		function makeNavStickyOnScroll() {
			var $window = $(window);
			var $spacesLink = $('a#link_to_spaces');

			// Override the standard nav bar by giving it id "homecoming-float" and removing "fixed" class
			$('.site-nav')
				.attr('id', 'homecoming-float')
				.removeClass('navbar-fixed-top');

			// find the Y position of the intro section
			var intro_offset = $('section.intro').offset().top;
			$window.scroll(function windowScroll() {
				if ($window.scrollTop() >= intro_offset) {
					// Make site nav sticky once we scroll past intro section
					$('.site-nav')
						.attr('id', 'siteNav')
						.addClass('navbar-fixed-top');
					// Add active class to Event Spaces menu item once we scroll past intro section
					$spacesLink.addClass('site-nav-menu__link--active');
				}
				// un-sticky site nav and remove active class from Event Space menu item once we scroll above intro section
				if ($window.scrollTop() < intro_offset) {
					$('.site-nav')
						.attr('id', 'homecoming-float')
						.removeClass('navbar-fixed-top');
					$spacesLink.removeClass('site-nav-menu__link--active');
				}
			});
		}

		// Device detection
		if (WURFL.form_factor === 'Desktop') {
			// On Desktop devices, primary nav can become sticky based on scroll position
			makeNavStickyOnScroll();
		} else if (WURFL.form_factor === 'Smartphone' || phonePass === true) {
			// On Phone devices, add class to <body> for new styling
			$('body').addClass('phone');
			// On Phone devices, remove homepage carousel
			$('#carousel-home').remove();
			isPhone = true;
		}
	}
});
