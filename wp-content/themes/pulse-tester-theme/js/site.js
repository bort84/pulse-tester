jQuery(document).ready(function($) {

	/* Hamburger Menu: Mobile */
	$('.hamburger-menu').click(function(){
		$(this).toggleClass('open');
		$('.primary-nav').toggle();
	});



	/* slick gallery settings */
    // $('.slides').slick( {
    //     speed: 800,
    //     adaptiveHeight: true,
    //     fade: true,
    //     accessibility: false
    // });



    /* slick-lightbox gallery settings */
	// $('.lightbox-gallery .gallery-wrap').slickLightbox({
	//   itemSelector        : 'a',
	//   navigateByKeyboard  : true,
	// 	slick : {
	// 		infinite: false
	// 	}
	// });



	/* Show page once js has loaded */
	$('body').removeClass('loading-js');
});