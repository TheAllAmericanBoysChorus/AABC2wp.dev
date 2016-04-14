/**
 * PRIMARY CUSTOM ADMIN JAVASCRIPT FILE
 *
 * If you need to add any custom javascript to your WordPress admin, add it here.  It compiles to assets/js/admin.min.js
 * in your theme directory.
 */
(function ($) {

    //code goes here

})(jQuery);
!function($){}(jQuery);
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
    prevNextButtons: true,
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

var flkty=new Flickity(".main-gallery",{cellAlign:"left",contain:!0,wrapAround:!0,prevNextButtons:!1,autoPlay:5e3});!function($){$(document).foundation("topbar",{sticky_class:"snap-to-top"})}(jQuery);
/**
 * THEME CUSTOMIZER JAVASCRIPT CONTROLS
 *
 * This file adds LIVE updates to the Theme Customizer live preview. To leverage this, set your custom settings to
 * 'postMessage' and then add your handling here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery. This compiles to assets/js/theme-customizer.min.js in your
 * theme directory.
 */
( function( $ ) {

    // Update the site title in real time...
    wp.customize( 'blogname', function( value ) {           //Specify SETTING id here
        value.bind( function( newval ) {
            $( '#site-title a' ).html( newval );            //Define custom handling here (newval contains the new value)
        } );
    } );
    
    //Update the site description in real time...
    wp.customize( 'blogdescription', function( value ) {    //Specify SETTING id here
        value.bind( function( newval ) {
            $( '#site-description' ).html( newval );        //Define custom handling here (newval contains the new value)
        } );
    } );

    //Update site title color in real time...
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( newval ) {
            $('#site-title a').css('color', newval );       //Modify any element(s) css style based on the settings' value (for example, color)
        } );
    } );

    //Update site background color...
    wp.customize( 'background_color', function( value ) {
        value.bind( function( newval ) {
            $('body').css('background-color', newval );     //Modify any element(s) css style based on the settings' value (for example, color)
        } );
    } );
    
    //Update site title color in real time...
    wp.customize( 'nouveau_theme_options[link_textcolor]', function( value ) {
        value.bind( function( newval ) {
            $('a').css('color', newval );                   //Modify any element(s) css style based on the settings' value (for example, color)
        } );
    } );
    
} )( jQuery );
!function($){wp.customize("blogname",function(o){o.bind(function(o){$("#site-title a").html(o)})}),wp.customize("blogdescription",function(o){o.bind(function(o){$("#site-description").html(o)})}),wp.customize("header_textcolor",function(o){o.bind(function(o){$("#site-title a").css("color",o)})}),wp.customize("background_color",function(o){o.bind(function(o){$("body").css("background-color",o)})}),wp.customize("nouveau_theme_options[link_textcolor]",function(o){o.bind(function(o){$("a").css("color",o)})})}(jQuery);