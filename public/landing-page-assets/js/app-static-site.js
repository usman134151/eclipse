//register the plugin (just once)
gsap.registerPlugin(MotionPathPlugin);
gsap.registerPlugin(Flip);


// gsap.from(".js-about-us", 1, {
//   duration: 10, 
//   // repeat: 0,
//   // repeatDelay: 3,
//   // yoyo: true,
//   // ease: "power1.inOut",
//   motionPath:{
//     path: ".js-path",
//     align: ".js-path",
//     // autoRotate: true,
//     // alignOrigin: [0.5, 0.5]
//   }
// }, 1);




//window.onload event handler: is triggered once everything in the DOM is loaded, ie, scripts, text, images, etc..


// create
let mm = gsap.matchMedia();

// add a media query. When it matches, the associated function will run
mm.add("(min-width: 1199px)", () => {

  // this setup code only runs when viewport is at least 800px wide
  window.onload = function() {

    var timeline = new TimelineMax();
    timeline
    .from(".circle", 1, {x:-6000 },0)
    .to(".pattern", 50, {rotate: 360, repeat: -1, transformOrigin:'50% 50%',ease: Power0.easeNone},0)
      // .from(".js-about-us", 1, {x:-6000},1)
      .from(".js-about-us", 2, {
          // duration: 100, 
          // repeat: 0,
          // repeatDelay: 3,
          // yoyo: true,
          ease: "power1.inOut",
          motionPath:{
            path: ".js-path",
            align: ".js-path",
            // autoRotate: true,
            alignOrigin: [0.5, 0.5],
            start: 0.40,
            end: 0,
          }
        }, 1)
      .from(".js-software-features", 2, {
        // duration: 100, 
        // repeat: 0,
        // repeatDelay: 3,
        // yoyo: true,
        ease: "power1.inOut",
        motionPath:{
          path: ".js-path",
          align: ".js-path",
          // autoRotate: true,
          alignOrigin: [0.5, 0.5],
          start: 0.52,
          end: 0
        }
      },1)
      .from(".js-getting-started", 2, {
        // duration: 100, 
        // repeat: 0,
        // repeatDelay: 3,
        // yoyo: true,
        ease: "power1.inOut",
        motionPath:{
          path: ".js-path",
          align: ".js-path",
          // autoRotate: true,
          alignOrigin: [0.5, 0.5],
          start: 0.64,
          end: 0
        }
      },1)
      .from(".js-contact", 2, {
        // duration: 100, 
        // repeat: 0,
        // repeatDelay: 3,
        // yoyo: true,

        ease: "power1.inOut",
        motionPath:{
          path: ".js-path",
          align: ".js-path",
          // autoRotate: true,
          alignOrigin: [0.5, 0.5],
          start: 0.76,
          end: 0
        }
      },1)
      .from(".js-img-bottom", 1, {x:-6000},0)
      .from(".js-logo", 1.125, {opacity:0},2)
      // .from(".js-mobile-nav-toggle", 1.125, {opacity:0},2)
      .from(".js-content", 1.25, {
        opacity:0,
        // rotateX:180,
        // repeat: -1
        // scale: 0.01,
      },3)
  }

  return () => { // optional
    // custom cleanup code here (runs when it STOPS matching)
  };
});

// later, if we need to revert all the animations/ScrollTriggers...
mm.revert();



$('.js-about-us').click(function() {
  $('.js-img-about-us').addClass('active');
  $('.js-img-software-features').removeClass('active');
  $('.js-img-getting-started').removeClass('active');
  $('.js-img-contact').removeClass('active');
  $('.js-navigation').removeClass('show');
  $('.js-content-wrapper').removeClass('menu-show');
});

$('.js-software-features').click(function() {
  $('.js-img-software-features').addClass('active');
  $('.js-img-about-us').removeClass('active');
  $('.js-img-getting-started').removeClass('active');
  $('.js-img-contact').removeClass('active');
  $('.js-navigation').removeClass('show');
  $('.js-content-wrapper').removeClass('menu-show');
});


$('.js-getting-started').click(function() {
  $('.js-img-getting-started').addClass('active');
  $('.js-img-about-us').removeClass('active');
  $('.js-img-software-features').removeClass('active');
  $('.js-img-contact').removeClass('active');
  $('.js-navigation').removeClass('show');
  $('.js-content-wrapper').removeClass('menu-show');
});


$('.js-contact').click(function() {
  $('.js-img-contact').addClass('active');
  $('.js-img-about-us').removeClass('active');
  $('.js-img-getting-started').removeClass('active');
  $('.js-img-software-features').removeClass('active');
  $('.js-navigation').removeClass('show');
  $('.js-content-wrapper').removeClass('menu-show');
});


$('.js-mobile-nav-toggle').click(function() {
  $('.js-navigation').addClass('show');
  $('.js-content-wrapper').addClass('menu-show');
});

$('.js-close-navigation').click(function() {
  $('.js-navigation').removeClass('show');
  $('.js-content-wrapper').removeClass('menu-show');
});

$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (event) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 2,
            spaceBetween: 50,
          },
        },
    });
    $(".mySwiper").mouseenter(function() {
      swiper.autoplay.stop();
      console.log('slider stopped');
    });

    $(".mySwiper").mouseleave(function() {
      swiper.autoplay.start();
      console.log('slider started again');
    });
} );

$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).load(function() {
    $('.preloader-wrapper').fadeOut();
    $('body').removeClass('preloader-site');
});