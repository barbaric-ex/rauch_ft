(function ($) {
  "use strict";

  $('a[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 56,
          },
          1000,
          "easeInOutExpo"
        );
        return false;
      }
    }
  });

  $(".js-scroll-trigger").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  $("body").scrollspy({
    target: "#mainNav",
    offset: 56,
  });

  $(window).on("load scroll", function (e) {
    if ($(".navbar").offset().top > 100) {
      $(".navbar").addClass("top-nav-collapse");
    } else {
      $(".navbar").removeClass("top-nav-collapse");
    }
  });

  jQuery(function ($) {
    if ($(window).width() < 991) {
      $(".navbar .dropdown > a").click(function () {
        location.href = this.href;
      });
    }
  });

  $(window).on("load", function (e) {
    $(".home_sec1 .wrapper2 .accordion_item .title_wrap").click(function () {
      $(this)
        .siblings(".home_sec1 .wrapper2 .accordion_item .content_text")
        .slideToggle(300);
      $(this).toggleClass("active");
      $(this).find(".image img").toggleClass("active-arr");

      $(this).siblings(".content_text").toggleClass("active-arr");
    });
  });

  $(document).ready(function () {
    $(".menu-btn button").click(function () {
      $(".navbar-collapse").toggleClass("navbar250");
      $(".c-hamburger").toggleClass("is-active");
      $(".dark-overly").toggleClass("active");
    });
    $(".menu-btn-close").click(function () {
      $(".navbar-collapse").removeClass("navbar250");
      $(".menu-btn").removeClass("active");
      $(".dark-overly").removeClass("active");
    });
    $(".navbar-nav li a").click(function () {
      var windowWidth = $(window).width();
      if (windowWidth < 768) {
        $(".navbar-collapse").removeClass("navbar250");
        $(".c-hamburger").removeClass("is-active");
        $(".dark-overly").removeClass("active");
      }
    });

    $(".search-main-btn").click(function () {
      $(".search-fixed-wrap").addClass("active");
      $(".search-fixed-wrap input[type='text']").focus();
    });

    $(".close-btn-search").click(function () {
      $(".search-fixed-wrap").removeClass("active");
    });
  });

  $(".navbar .dropdown > a").click(function () {
    location.href = this.href;
  });

  $(window).on("load scroll", function (e) {
    if ($(window).scrollTop() > 500) {
      $(".to-top img").show(100);
    } else {
      $(".to-top img").hide(100);
    }
  });
  $(".to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800, "easeInOutExpo");
  });

  function toggleDropdown(e) {
    const _d = $(e.target).closest(".dropdown"),
      _m = $(".dropdown-menu", _d);
    setTimeout(
      function () {
        const shouldOpen = e.type !== "click" && _d.is(":hover");
        _m.toggleClass("show", shouldOpen);
        _d.toggleClass("show", shouldOpen);
        $('[data-toggle="dropdown"]', _d).attr("aria-expanded", shouldOpen);
      },
      e.type === "mouseleave" ? 0 : 0
    );
  }

  $("body")
    .on("mouseenter mouseleave", ".dropdown", toggleDropdown)
    .on("click", ".dropdown-menu a", toggleDropdown);
})(jQuery);
