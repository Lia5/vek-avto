$(function() {
	//МЕНЮ
	    $('.nav').nav();

// popup
$('.register').click(function() {
    $('#parent_popup').removeClass('popup__none');
    $(this).fadeIn(500);
  });
$('.popup__close').click(function() {
    $('#parent_popup').addClass('popup__none');
    $('#parent_popup').fadeOut(100);
  });
  //popup2
  $('.get-free-diagnostic').click(function() {
    $('#parent_popup2').removeClass('popup__none');
    $('#parent_popup2').fadeIn(500);
  });
$('.popup__close').click(function() {
    $('#parent_popup2').addClass('popup__none');
    $('#parent_popup2').fadeOut(100);
  });

var nav = $('.nav-button');
var nav_active = $('.nav-button_active');
  nav.on('click', function(event) {
    event.preventDefault();
    nav.toggleClass('nav-button_active');
  });
  $('.nav-button_active').on('click', function(event) {
    event.preventDefault();
    nav.removeClass('nav-button_active');
  });
$('.popup__close').click(function() {
    $('#parent_popup3').addClass('popup__none');
  });

// PARALLAX
    $('.parallax-window').parallax({imageSrc: '../img/about-bg.jpg'});
// ANIMATE
	new WOW().init();
// MAP
 ymaps.ready(init);
    var myMap,
    		myPlacemark1,
    		myPlacemark2,
    		myPlacemark3;

    function init(){     
        myMap = new ymaps.Map("map", {
            center: [52.624014, 39.599189],
            zoom: 13
        });
        myPin = new ymaps.GeoObjectCollection({
        	iconLayout: 'default#image',
        	iconImageHref: 'img/marker.png',
        	iconImageSize: [46, 67],
        	iconImageOffset: [0, 0]
        });
			
        myPlacemark1 = new ymaps.Placemark([52.63293007, 39.65367600], { 
         balloonContentHeader: '<img src="img/logo.png" class="map-pic">',
    		balloonContentBody: 'Ремонтный цех №1',
    		balloonContentFooter: 'Липецк, ул. К.Либкнехта, 19',
    		hintContent: 'время работы 9:00 — 19:00 (без выходных)'
        });
        myPlacemark2 = new ymaps.Placemark([52.63824757, 39.66004500], { 
            balloonContentHeader: '<img src="img/logo.png" class="map-pic">',
    		balloonContentBody: 'Ремонтный цех №2',
    		balloonContentFooter: 'Липецк, ул. Ушинского, 8',
    		hintContent: 'время работы 9:00 — 19:00 (без выходных)'
        });
        myPlacemark3 = new ymaps.Placemark([52.62610307, 39.54122450], { 
            balloonContentHeader: '<img src="img/logo.png" class="map-pic">',
    		balloonContentBody: 'Малярно-кузовной цех',
    		balloonContentFooter: 'Липецк, Трубный проезд, 6',
    		hintContent: 'время работы 9:00 — 19:00 (без выходных)'
        });

myPin.add(myPlacemark1).add(myPlacemark2).add(myPlacemark3);
myMap.behaviors.disable('scrollZoom');
myMap.geoObjects.add(myPin);
    }

//timer
function updater(d, h, m, s) {
    var baseTime = new Date(2018, 0, 5);
    var period = 3*24*60*60*1000;
    function update() {
      var cur = new Date();
      var diff = period - (cur - baseTime) % period;
      var millis = diff % 1000;
      diff = Math.floor(diff/1000);
      var sec = diff % 60;
      if(sec < 10) sec = "0"+sec;
      diff = Math.floor(diff/60);
      var min = diff % 60;
      if(min < 10) min = "0"+min;
      diff = Math.floor(diff/60);
      var hours = diff % 24;
      if(hours < 10) hours = "0"+hours;
      var days = Math.floor(diff / 24);
      d.innerHTML = days;
      h.innerHTML = hours;
      m.innerHTML = min;
      s.innerHTML = sec;
      setTimeout(update, millis);
    }
    setTimeout(update, 0);
  }
  
  updater(document.getElementById("days"),
   document.getElementById("hours"), document.getElementById("minutes"),
   document.getElementById("seconds"));
   if(jQuery('#days2').length) {
    updater(document.getElementById("days2"),
    document.getElementById("hours2"), document.getElementById("minutes2"),
    document.getElementById("seconds2"));
   }
});

//jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}