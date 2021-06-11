$(function(){
	let $slider 		= $('.slider');
	let $lettersSlider  = $('.letters__list');
	let $partnersSlider = $('.partners');
	let $gallerySlider 	= $('.gallery__list');
	let $prevBtn 		= $('.slider__btn--prev');
	let $nextBtn 	 	= $('.slider__btn--next');

	$lettersSlider.slick({
		slidesToShow: 3,
		prevArrow: $prevBtn,
		nextArrow: $nextBtn,
		infinite: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$partnersSlider.slick({
		slidesToShow: 6,
		arrows: false,
		autoplay: true
	});

	$gallerySlider.slick({
		slidesToShow: 2,
		prevArrow: $prevBtn,
		nextArrow: $nextBtn,
		infinite: false,
	});

	$slider.on('afterChange', function(sl, cs) {
		let $activeFirstIndex = $slider.find('.slick-active').first().data('slick-index');
		let $activeLastIndex = $slider.find('.slick-active').last().data('slick-index');

		if($activeFirstIndex !== 0) {
			$prevBtn.prop('disabled', false);
		} else {
			$prevBtn.prop('disabled', true);
		}

		console.log($activeFirstIndex, $activeLastIndex, cs.slideCount);

		if($activeLastIndex + 1 == cs.slideCount) {
			$nextBtn.prop('disabled', true);
		} else {
			$nextBtn.prop('disabled', false);
		}
	});
});