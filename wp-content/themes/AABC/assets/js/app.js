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

(function($) {

    // Foundation JavaScript
    $(document).foundation('topbar', {
        sticky_class: 'snap-to-top'
    });

    //Your code goes here
    // Main Banner Image Script

    // Define Variables

        //var mainBannerId = $("#main-banner");
        //var homePage = "http://localhost/AABCv3wp.dev/";
        //var aboutPage = "http://localhost/AABCv3wp.dev/about-us-2/";
        //
        //if (location.href === homePage) {
        //    mainBannerId.addClass("main-cta-bg-home");
        //    console.log("Hello");
        //} else {
        //    mainBannerId.removeClass("main-cta-bg-home");
        //}



})(jQuery);