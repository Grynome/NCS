/*
Theme Name: Magro
Theme URI: http://themewar.com/html/magro/
Author: ThemeWar
Author URI: http://themewar.com/
Description: Magro - Blog & News Magazine HTML5 Responsive Template.
Version: 1.0
License:
License URI:
*/
/*=======================================================================
 [Table of contents]
 =========================================================================
 1. Init Vars
 2. All Slider
 3. Inner Column Inside
 4. Video Play
 5. Skills
 6. Suffle
 7. Count Down
 8. Custom Google Maps
 9. Price Slider Range
 10. Qty
 11. Popup Menu and Mobile Menu
 12. Back To Top
 13. preloader
 14. Contact Form Submission
*/
(function($){
    'use strict';
    /* Init Vars */
    var feature_slider_active = $('.feature_slider_active');
    
    /*--------------------------------------------------------
    / 1. All Slider
    /--------------------------------------------------------*/
    if (feature_slider_active.length > 0) {
         feature_slider_active.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 4000,
            speed: 300,
            fade: true,
            asNavFor: '.feature_item_slide'
          });
          $('.feature_item_slide').slick({
            slidesToShow: 2,
            autoplay: true,
            arrows: false,
            slidesToScroll: 2,
            vertical: true,
            infinite: true,
            focusOnSelect: true,
            verticalSwiping: true,
            centerPadding: '0',
            autoplaySpeed: 4000,
            speed: 300,
            asNavFor: '.feature_slider_active',
            dots: false,
            centerMode: true
          });
          $('.feature_item_slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
                var sl_no = currentSlide + 1;
                $('.counting_bar h1').html(sl_no+'.');
          });
    }
})(jQuery);