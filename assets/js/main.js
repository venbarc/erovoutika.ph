$('.hero .slider').slick({
    slide:'.slide',
    infinite: true,
    slidesToShow:1,
    slidesToScroll:1,
    fade:true,
    autoplay:true,
    dots:true,
    arrows:false,
    speed:500,
    cssEase: 'linear',
    autoplaySpeed:5000
});

$('.mid-page-slider').slick({
    slide:'.slide',
    infinite: true,
    slidesToShow:1,
    slidesToScroll:1,
    fade:false,
    autoplay:true,
    dots:true,
    arrows:true,
    speed:500,
    cssEase: 'linear',
    autoplaySpeed:5000,
		mobileFirst: true,
		responsive : [
			{
				breakpoint: 1060,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false
				}
			}
		]
});