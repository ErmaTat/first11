/*	################################################################
 File Name: custom.js
 Template Name: Soprtsox
 Created By: webRedox
 ################################################################# */
jQuery('document').ready(function ($) {

    "use strict"; // Start of use strict
	
	$('#s').attr('placeholder','Type and hit enter...');
	
	var shs = eval($(".share-container").attr("data-share"));
    $(".share-container").share({
        networks: shs
    });

    /* STICKY MENU */
    var navHeight =  41;
    var topNavHeight = 50;
    var nav = $('.header-section');

    $(window).scroll(function () {
        if($(nav).hasClass('agency-header')){
            if ($(this).scrollTop() > topNavHeight) {
                nav.addClass("fixed");
            } else {
                nav.removeClass("fixed");
            }
        }else{
            if ($(this).scrollTop() > navHeight) {
                nav.addClass("fixed");
            } else {
                nav.removeClass("fixed");
            }
        }
		
		

    });

    /* === Latest News Filtter === */
    $('.button-group li').on('click', function(){
        $('.button-group li').removeClass('active');
        $(this).addClass('active');
    })

    /*== PrettyPhoto ==*/
    $("area[data-gal^='prettyPhoto']").prettyPhoto();
    $(".gallery:first a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'pp_default', slideshow: 3000, autoplay_slideshow: false, social_tools: ''});
    $(".gallery:gt(0) a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});

    /* === Jquery Counter === */
	jQuery('.countdown').each(function(){
	var $coundown = $(this);
	$coundown.downCount({
    
	date: $coundown.data("date"),
        offset: +1
    });
    });

    /* === APPEAR FUNCTION === */
    $('.skillbar').each(function () {
        $(this).appear(function () {
            $(this).find('.count-bar').animate({
                width: $(this).attr('data-percent')
            }, 3000);
            var percent = jQuery(this).attr('data-percent');
            $(this).find('.count').html('<span>' + percent + '</span>');
        });
    });

});

/* === BEST PLAYRE === */
(function($){

    "use strict"; // Start of use strict
	jQuery('#bestplayer').each(function(){
    var $owl = $(this);
    $owl.owlCarousel({
        items: 3,
		autoPlay: $owl.data("autoplay"),
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
		loop: false,
        autoplayHoverPause: true,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    });
})(jQuery);

/* === SLIDER GANE TIME === */
(function($){

    "use strict"; // Start of use strict

    var owl = $("#slider-game-time");
    owl.owlCarousel({
        items: 4,
        itemsDesktop: [1000, 4],
        itemsDesktopSmall: [900, 4],
        itemsTablet: [600, 4],
        itemsMobile: false
    });
})(jQuery);

/* === PLAYRE === */
(function($){

    "use strict"; // Start of use strict

    var owl = $(".player");
    owl.owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".player-next").on('click', function () {
        owl.trigger('owl.next');
    })
    $(".player-prev").on('click', function () {
        owl.trigger('owl.prev');
    })
})(jQuery);

/* === RECENT RESULT === */
(function($){

    "use strict"; // Start of use strict

    
	$('.recent-result').each(function(){
    var $owl = $(this);
    $owl.owlCarousel({
        items: 1,
		autoPlay: $owl.data("autoplay"),
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    
    $(".recent-re-next").on('click', function () {
        $owl.trigger('owl.next');
    });
    $(".recent-re-prev").on('click', function () {
        $owl.trigger('owl.prev');
    });
	});
	
})(jQuery);

/* === CLUB RANK  === */
(function($){

    "use strict"; // Start of use strict

    $('.club-ranking').each(function(){
    var $owl = $(this);
    $owl.owlCarousel({
        items: 1,
		autoPlay: $owl.data("autoplay"),
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".club-rank-next").on('click', function () {
        $owl.trigger('owl.next');
    });
    $(".club-rank-perv").on('click', function () {
        $owl.trigger('owl.prev');
    });
	});
})(jQuery);

/* === HOT VIDEO  === */
(function($){

    "use strict"; // Start of use strict
	$('.hot-video').each(function(){
    var $owl = $(this);
    $owl.owlCarousel({
        items: 4,
		autoPlay: $owl.data("autoplay"),
        itemsDesktop: [1000, 4],
        itemsDesktopSmall: [900, 3],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".video-next").on('click', function () {
        $owl.trigger('owl.next');
    });
    $(".video-perv").on('click', function () {
        $owl.trigger('owl.prev');
    });
    });
})(jQuery);




/* === UPDATE NEWS === */
(function($){

    "use strict"; // Start of use strict

    $('.update-news').each(function(){
    var $owl = $(this);
    $owl.owlCarousel({
        items: 3,
		autoPlay: $owl.data("autoplay"),
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".update-news-next").on('click', function () {
        $owl.trigger('owl.next');
    });
    $(".update-news-perv").on('click', function () {
        $owl.trigger('owl.prev');
    });
	});
})(jQuery);

/* === NEXT MATCH === */
(function($){

    "use strict"; // Start of use strict

    $('.next-match').each(function(){
    var $owl = $(this);
    $owl.owlCarousel({
        items: 1,
		autoPlay: $owl.data("autoplay"),
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".next-match-next").on('click', function () {
        $owl.trigger('owl.next');
    });
    $(".next-match-perv").on('click', function () {
        $owl.trigger('owl.prev');
    });
    });
})(jQuery);

/* === LATEST BLOG === */
(function($){

    "use strict"; // Start of use strict

    var owl = $("#latest-blog");
    owl.owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".next-match-next").on('click', function () {
        owl.trigger('owl.next');
    })
    $(".next-match-perv").on('click', function () {
        owl.trigger('owl.prev');
    })
})(jQuery);

/* === RECENT PRODUCT === */
(function($){

    "use strict"; // Start of use strict

    var owl = $("#recent-product");
    owl.owlCarousel({
        items: 4,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: false
    });
    $(".next-match-next").on('click', function () {
        owl.trigger('owl.next');
    });
    $(".next-match-perv").on('click', function () {
        owl.trigger('owl.prev');
    });
	
	
})(jQuery);



/* GOOGLE MAP */
"use strict"; // Start of use strict
function initGoogleMaps() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(40.7127, -74.0059), // New york

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]}, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]}, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}, {"lightness": 17}]}, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]}, {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 18}]}, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 16}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]}, {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#dedede"}, {"lightness": 21}]}, {"elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]}, {"elementType": "labels.text.fill", "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]}, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]}, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#fefefe"}, {"lightness": 20}]}, {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]}]
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.7127, -74.0059),
        map: map,
        title: 'Find us here!'
    });
}
if (jQuery("#map").length > 0) {
    // When the window has finished loading create our google map below
    var googleMaps = google.maps.event.addDomListener(window, 'load', initGoogleMaps);
}

/* === RANGE SLIDER === */
jQuery( function() {

    "use strict"; // Start of use strict

jQuery( "#slider-range" ).slider({
range: true,
min: 0,
max: 500,
values: [ 75, 300 ],
slide: function( event, ui ) {
jQuery( "#rangeA" ).val( "$" + ui.values[ 0 ] );
jQuery( "#rangeB" ).val( "$" + ui.values[ 1 ] );
}
});
jQuery( "#rangeA" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 0 ) );
jQuery( "#rangeB" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 1 ) );
});


(function($){
                $('#demo-pie-1, #demo-pie-2, #demo-pie-3').pieChart({
                    barColor: '#fec722',
                    trackColor: '#eee',
                    lineCap: 'round',
                    lineWidth: 2,
                    animate: {
                      duration: 4000,
                      enabled: true
                    },
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });
            })(jQuery);
jQuery(".nav li ul.sub-menu").each(function(i){
jQuery(this).addClass('dropdown-menu');
})
jQuery(".nav li ul.sub-menu").each(function(i){
jQuery(this).addClass('fadeIn-Up  animatedMini');
});
jQuery(".nav li ul.sub-menu").each(function(i){
jQuery(this).removeClass('sub-menu');
})

jQuery(".nav li.menu-item-has-children").each(function(i){
jQuery(this).addClass('dropdown');
})

jQuery("li div.wr-megamenu-inner").each(function(i){
jQuery(this).addClass('fadeIn-Up  animatedMini wr-drowp megamenu-content wr-mega-menu-sp');

})

jQuery(".navbar-nav style ").each(function(i){
jQuery(this).remove("style");
})

/* =======================================================================
		  		Menu
	  =======================================================================
	*/
    var Menu = {
        el: {
            ham: jQuery(".nav-button"),
            menuTop: jQuery(".menu-top"),
            menuMiddle: jQuery(".menu-middle"),
            menuBottom: jQuery(".menu-bottom")
        },
        init: function() {
            Menu.bindUIactions();
        },
        bindUIactions: function() {
            Menu.el.ham.on("click", function(a) {
                Menu.activateMenu(a);
                a.preventDefault();
            });
        },
        activateMenu: function() {
            Menu.el.menuTop.toggleClass("menu-top-click");
            Menu.el.menuMiddle.toggleClass("menu-middle-click");
            Menu.el.menuBottom.toggleClass("menu-bottom-click");
        }
    };
    Menu.init();
    jQuery("#hid-men").menu();

	// header functions +  menu  ------------------
    var cm = jQuery(".nav-button");
    var nh = jQuery(".nav-inner");
    var no = jQuery(".nav-overlay , .close-share");
    function showmenu() {
        setTimeout(function() {
            nh.addClass("vismen");
        }, 120);
        cm.addClass("cmenu");
        nh.removeClass("isDown");
        no.addClass("visover");
    }
    function hidemenu() {
        nh.addClass("isDown");
        cm.removeClass("cmenu");
        nh.removeClass("vismen");
        no.removeClass("visover");
    }
    cm.on("click", function() {
		if (nh.hasClass("isDown")) {
			showmenu();
		}
		else {
		hidemenu();
       
		}
		return false;
    });
    no.on("click", function() {
        hidemenu();
        
		return false;
    });
	jQuery(".nav-button").attr("onclick","return true");


//twttr.events.bind('follow', function(event) {
//console.log(event);
//var followed_user_id = event.data.user_id;
//var followed_screen_name = event.data.screen_name;
//});

(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=937758502980138";
 fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
 
new WOW().init();


