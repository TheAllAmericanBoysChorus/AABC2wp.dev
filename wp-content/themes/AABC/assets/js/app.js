/**
 * PRIMARY THEME JAVASCRIPT FILE
 *
 * This is your public-facing, front-end Javascript. It compiles to assets/js/app.min.js in your theme directory.
 *
 * This is used to initialize your custom Javascript. If you would like to change how Foundation and it's plugins are
 * initialized, you can. See http://foundation.zurb.com/docs/javascript.html for documentation.
 */

var flkty = new Flickity( '.main-gallery', {
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 5000
});

var flkty = new Flickity( '.basic-gallery', {
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    pageDots: false,
    prevNextButtons: false,
    autoPlay: 5000
});

(function($) {

    // Foundation JavaScript
    $(document).foundation('topbar', {
        sticky_class: 'snap-to-top'
    });

    //Your code goes here


    $(document).ready(function(){

      //  Navigation fixed after scrolling
      var $mainNavBar = $('.contain-to-grid');
      var $smallLogo = $('.small-logo');

      $(window).scroll(function(){
        if($(window).scrollTop() >= 160) {
          $mainNavBar.addClass('fixed-nav');
          $smallLogo.addClass('show');
        } else {
          $mainNavBar.removeClass('fixed.nav');
          $smallLogo.removeClass('show');
        }

        if($(window).scrollTop() <= 160) {
          $mainNavBar.removeClass('fixed-nav');
          $smallLogo.removeClass('show');
        }
      });

      // Show modal container after scrolling
      $(window).scroll(function(){
        if($(window).scrollTop() > 1000) {
          $('.modal-container').addClass('scrolled');
        } else {
          return;
        }
      });

      // Hide modal when 'x' is clicked
      $('.modal-container i').on('click', function() {
        $('.modal-container').addClass('hide');
      });

    });



})(jQuery);
