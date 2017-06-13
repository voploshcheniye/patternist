jQuery(document).ready(function($) {

	$('.feature').ripples({
		resolution: 100,
		dropRadius: 150,
		perturbance: 0.005,
	});

	var $root = $('html, body');

	// Select all links with hashes
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$root.animate({
						scrollTop: target.offset().top
					}, 1000, function() {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});

	// The scroll-up function
	function scrollUp() {
		var vheight = $(window).height();
		$root.animate({
			scrollTop: (Math.ceil($(window).scrollTop() / vheight) - 1) * vheight
		}, 1000);

	};

	// The scroll-down function
	function scrollDown() {
		var vheight = $(window).height();
		$root.animate({
			scrollTop: (Math.floor($(window).scrollTop() / vheight) + 1) * vheight + 1
		}, 1000);
	};

	// Key Events
	$(document).keydown(function(e) {
		e.preventDefault;
		if (e.keyCode == 87) {
			scrollUp();
		};
		if (e.keyCode == 83) {
			scrollDown();
		};
		//if (e.keyCode == 65) { scrollUp(); }; A Key
		//if (e.keyCode == 68) { scrollUp(); }; D Key
	});

})