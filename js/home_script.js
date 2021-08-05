(function ($) {
  "use strict";

  // ----------------------------
  // AOS
  // ----------------------------
  AOS.init({
    once: true,
  });

  $(window).on("load", function () {
    $(".preloader").fadeOut("slow");
  });

  $(window).on("scroll", function () {
    //box shadow below navbar
    //.Scroll to top show/hide
    var scrollToTop = $(".scroll-top-to"),
      scroll = $(window).scrollTop();
    if (scroll >= 200) {
      $(".navbar").addClass("box-shadow");
      $(".navbar").addClass("navbar-solid");
      $(".navbar").removeClass("py-3");
      scrollToTop.fadeIn("slow");
    } else {
      $(".navbar").removeClass("box-shadow");
      $(".navbar").removeClass("navbar-solid");
      $(".navbar").addClass("py-3");
      scrollToTop.fadeOut("slow");
    }
  });

  $(".navbar-toggler").on("click", function () {
    $(".navbar").toggleClass("gradient");
  });

  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path

  activeDefault();

  function activeDefault() {
    if (path === null) {
      $(".navbar .navbar-nav a.nav-link").find('.home').addClass('active');
    }
  }

  $(".navbar .navbar-nav a.nav-link").each(function () {
    if (this.href === path) {
      $(this).addClass("active");
    }
  });

  // features Carousel
  $(".features-carousel").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  // support Carousel
  $(".supports-carousel").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  // scroll-to-top
  $(".scroll-top-to").on("click", function () {
    $("body,html").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
