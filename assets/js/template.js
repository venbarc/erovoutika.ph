(function($) {
	'use strict';
	$(function() {
		$('.owl-carousel-portfolio').owlCarousel({
			loop: true,
			stagePadding: 100,
			margin: 20,
			nav: false,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 3
				},
				1000: {
					items: 4
				}
			}
		})
		var wWidth = $(window).width();
		var menuWidth = $(".navbar-collapse").width();
		$(".navbar-toggler").click(function() {
			$('.collapsing').toggleClass('show');
			$('body').addClass("sidebar-overlay");
		});
		$("#mobile-menu-overlay, .close-menu, .nav-link").click(function() {
			$('.collapse').toggleClass('show');
			$('body').removeClass("sidebar-overlay");
		});

		$("a.nav-link").on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function() {

					window.location.hash = hash;
				});
			}
		});

		AOS.init({
			offset: 0,
			duration: 800,
			easing: 'ease-in-quad',
			delay: 100,
		});

		$("#awards-flipster").flipster({
			style: 'coverflow',
			spacing: -.9,
			nav: false,
			loop: true,
			buttons: false,
		});

		$('.flipster-custom-nav-link').click(function() {
			var navlinkSelected = parseInt(this.title);
			$('.flipster-custom-nav-link').removeClass("active");
			$(this).addClass("active");
			$("#awards-flipster").flipster('jump', navlinkSelected);
		});

		$('#toggle-switch').click(function() {
			if ($('#toggle-switch').is(':checked')) {
				$('.monthly').addClass("text-active");
				$('.yearly').removeClass("text-active");
				$("#toggle-switch").attr("checked", "checked");
			} else {
				$('.monthly').removeClass("text-active");
				$('.yearly').addClass("text-active");
				$("#toggle-switch").removeAttr("checked");
			}
		});

		// counter Satisfied clients
		var maxScVal = 897;
		var isc = parseInt($('.HappyC').text());
		var tim;
		function run() {
			tim = setInterval(function() {
				if (isc >= maxScVal) {
					clearInterval(tim);
					return;
				}
				$('.HappyC').text(++isc);
			}, 100);
		}
		run();
		//End

		// counter portfolio
		var projects = 45;
		var isc1 = parseInt($('.projects').text());
		var tim1;
		function run1() {
			tim1 = setInterval(function() {
				if (isc >= projects) {
					clearInterval(tim1);
					return;
				}
				$('.projects').text(++isc1);
			}, 100);
		}
		run1();
		//End

		//Counter Awards
		var award = 5;
		var isc2 = parseInt($('.award').text());
		var tim2;
		function run2() {
			tim1 = setInterval(function() {
				if (isc >= award) {
					clearInterval(tim2);
					return;
				}
				$('.award').text(++isc2);
			}, 100);
		}
		run2();
		//End

		//Counter Years
		var year = 4;
		var isc3 = parseInt($('.year').text());
		var tim3;
		function run3() {
			tim3 = setInterval(function() {
				if (isc >= year) {
					clearInterval(tim3);
					return;
				}
				$('.year').text(++isc3);
			}, 100);
		}
		run3();
		//End



	});
})(jQuery);


/*Home Carousel*/
window.addEventListener("load", () => {
   autoSlide();
})

function autoSlide() {
   setInterval(() => {
      slide(getItemActiveIndex() + 1);
   }, 4000); // slide speed = 4s
}

function slide(toIndex) {
   const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
   const itemActive = document.querySelector(".carousel_item__active");

   // check if toIndex exceeds the number of carousel items
   if (toIndex >= itemsArray.length) {
      toIndex = 0;
   }

   const newItemActive = itemsArray[toIndex];

   // start transition
   newItemActive.classList.add("carousel_item__pos_next");
   setTimeout(() => {
      newItemActive.classList.add("carousel_item__next");
      itemActive.classList.add("carousel_item__next");
   },20);

   // remove all transition class and switch active class
   newItemActive.addEventListener("transitionend", () => {
      itemActive.className = "carousel_item";
      newItemActive.className = "carousel_item carousel_item__active";
   }, {
      once: true
   });
}

function getItemActiveIndex() {
   const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
   const itemActive = document.querySelector(".carousel_item__active");
   const itemActiveIndex = itemsArray.indexOf(itemActive);
   return itemActiveIndex;
}
/*End */


// Logo Carousel
$(".carousel-logo").owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplayHoverPause: false,
	responsive: {
		0: {
			items: 1,
			nav: false
		},
		600: {
			items: 2,
			nav: false
		},
		1000: {
			items: 3,
			nav: false
		},
		1400: {
			items: 4,
			nav: false
		},
		1800: {
			items: 5,
			nav: false
		}
	}
});

//End Logo Carousel 

// Portfolio Carousel
$(".carousel-portfolio").owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplayHoverPause: false,
	responsive: {
		0: {
			items: 1,
			nav: false
		},
		600: {
			items: 2,
			nav: false
		},
		1000: {
			items: 3,
			nav: false
		},
		1400: {
			items: 4,
			nav: false
		}
	}
});

//End Logo Carousel 