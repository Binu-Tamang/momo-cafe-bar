// =========================
// wow JS
// =========================
new WOW().init();

var $ = jQuery;
// ==========================
// Read more and Read less option
// ==========================
function myFunction(btn) {
  var parentDetails = btn.parentNode;
  var dots = parentDetails.querySelector(".dots");
  var moreText = parentDetails.querySelector(".more");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    moreText.style.display = "none";
    btn.innerHTML = "Read more";
  } else {
    dots.style.display = "none";
    moreText.style.display = "inline";
    btn.innerHTML = "Read less";
  }
}

// ========================
// navbar sticky
// ========================
(function ($) {
  "use strict";
  $(document).ready(function () {
    var primaryHeader = $(".primary-header"),
      headerClone = primaryHeader.clone();
    $(".header").after('<div class="sticky-header"></div>');
    $(".sticky-header").html(headerClone);
    var headerSelector = document.querySelector(".sticky-header");
    var triggerPoint = $(".header").height();
    var yOffset = 0;

    $(window).on("scroll", function () {
      yOffset = $(window).scrollTop();
      if (yOffset >= triggerPoint) {
        $(".sticky-header").addClass("sticky-fixed-top");
      } else {
        $(".sticky-header").removeClass("sticky-fixed-top");
      }
    });

    if ($(".primary-header").length) {
      $(".header .primary-header .burger-menu").on("click", function () {
        $(this).toggleClass("menu-open");
        $(".header .header-menu-wrap").slideToggle(300);
      });

      $(".sticky-header .primary-header .burger-menu").on("click", function () {
        $(this).toggleClass("menu-open");
        $(".sticky-header .header-menu-wrap").slideToggle(300);
      });
    }

    $(".header-menu-wrap ul li:has(ul)").each(function () {
      $(this).append('<span class="dropdown-plus"></span>');
      $(this).addClass("dropdown_menu");
    });

    $(".header-menu-wrap .dropdown-plus").on("click", function () {
      $(this).prev("ul").slideToggle(300);
      $(this).toggleClass("dropdown-open");
      $(".header-menu-wrap ul li:has(ul)").toggleClass("dropdown-open");
    });

    $(".header-menu-wrap .dropdown_menu a").append("<span></span>");

    // Responsive Classes
    function responsiveClasses() {
      var body = $("body");
      if ($(window).width() < 992) {
        body.removeClass("viewport-lg");
        body.addClass("viewport-sm");
      } else {
        body.removeClass("viewport-sm");
        body.addClass("viewport-lg");
      }
    }

    //responsiveClasses();
    $(window)
      .on("resize", function () {
        responsiveClasses();
      })
      .resize();

    function doAnimations(elements) {
      var animationEndEvents =
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data("delay");
        var $animationDuration = $this.data("duration");
        var $animationType = "animated " + $this.data("animation");
        $this.css({
          "animation-delay": $animationDelay,
          "-webkit-animation-delay": $animationDelay,
          "animation-duration": $animationDuration,
          "-webkit-animation-duration": $animationDuration,
        });
        $this
          .addClass($animationType + " element")
          .one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
      });
    }

    //Food Carousel
    const foodCarousel = document.querySelector(".food-carousel");
    const swiperOptions = {
      slidesPerView: 4,
      slidesPerGroup: 1,
      loop: true,
      grabCursor: true,
      speed: 500,
      spaceBetween: 10,
      mousewheel: false,
      initialSlide: 2,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: ".dl-slider-button-next",
        prevEl: ".dl-slider-button-prev",
      },
      pagination: {
        el: ".dl-swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return (
            '<span class="' +
            className +
            '">' +
            '<svg class="dl-circle-loader" width="20" height="20" viewBox="0 0 20 20">' +
            '<circle class="path" cx="10" cy="10" r="5.5" fill="none" transform="rotate(-90 10 10)"' +
            'stroke-opacity="1" stroke-width="2px"></circle>' +
            '<circle class="solid-fill" cx="10" cy="10" r="3"></circle>' +
            "</svg></span>"
          );
        },
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 0,
        },
        // when window width is >= 767px
        767: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 10,
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 4,
          slidesPerGroup: 1,
          spaceBetween: 10,
        },
      },
    };
    // Venobox Active
    new VenoBox({
      selector: ".video-popup, .img-popup",
      bgcolor: "transparent",
      numeration: true,
      infinigall: true,
      spinner: "plane",
    });
  });
})(jQuery);

// ===============================
// Initialize Flatpickr for date
// ===============================
flatpickr("#date", {
  dateFormat: "Y-m-d", // Date format
  disableMobile: "true",
});

// ===============================
// Initialize Flatpickr for time
// ==============================
flatpickr("#time", {
  enableTime: true, // Enable time picker
  noCalendar: true, // Hide calendar
  dateFormat: "H:i", // Time format
  time_24hr: true, // Use 24-hour format
  disableMobile: "true",
});

// ================================
// this is for banner-slider
// ================================
$(document).ready(function () {
  $(".owl-carousel.banner-slider").owlCarousel({
    loop: true, // Enable loop
    margin: 20, // Margin between items
    nav: false, // Disable navigation buttons
    dots: true, // Enable dots navigation
    autoplayTimeout: 5000,
    navSpeed: 4000,
    smartSpeed: 750,
    dotsContainer: '#circlebanner',
    dotsData: true,
    autoplay: true, // Enable autoplay
    responsive: {
      // Responsive breakpoints
      0: {
        items: 1, 
      },
      768: {
        items: 1, 
      },
      992: {
        items: 1, 
      },
    },
  });
  $('#circlebanner .owl-dot').each(function() {
    var $this = $(this);
    $this.replaceWith(function() {
        return $('<button>').append($this.contents());
    });
  });
});

// ============================================
// this is review or testimonial 
// ============================================
$(".owl-carousel.banner-review-carousel").owlCarousel({
  loop: true, // Enable loop
  margin: 20, // Margin between items
  nav: true, // Disable navigation buttons
  dots: false, // Enable dots navigation
  autoplay: true, // Enable autoplay
  autoplayTimeout: 6000, // Autoplay interval in milliseconds
  responsive: {
    // Responsive breakpoints
    0: {
      items: 1, 
    },
    768: {
      items: 1, 
    },
    992: {
      items: 1, 
    },
  },
});

// ===============================================
// Scroll top to bottom js starts
// ===============================================
// Show the button when the user scrolls down 20px from the top of the document
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopBtn").style.display = "block";
  } else {
    document.getElementById("scrollToTopBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
document
  .getElementById("scrollToTopBtn")
  .addEventListener("click", function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  });


// ========================================
// mouse move parallax effect js
// ========================================
// Add event listener for desktop views
document.addEventListener("mousemove", parallax);

// Add event listener for mobile views to disable parallax effect
window.addEventListener("resize", function() {
    if (window.innerWidth <= 768) { // Adjust the threshold as needed
        document.removeEventListener("mousemove", parallax);
    } else {
        document.addEventListener("mousemove", parallax);
    }
});

function parallax(event) {
    // Your parallax effect code here
    this.querySelectorAll(".mouse").forEach((shift) => {
        const position = shift.getAttribute("value");
        const x = (window.innerWidth - event.pageX * position) / 90;
        const y = (window.innerHeight - event.pageY * position) / 90;

        shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
}


// ===========================
// lazy loading and optimize images in banner slider of owl carasoul
// ===========================
document.addEventListener('DOMContentLoaded', function() {
  var lazyLoadInstance = new LazyLoad({
      elements_selector: ".item img",
      // Configuration options for lazy loading
  });
});

// ===============================
// Page Loader JS starts 
// ===============================
/* 1. Proloder */
$(window).on('load', function () {
  $('#preloader-active').delay(450).fadeOut('slow');
  $('body').delay(450).css({
    'overflow': 'visible'
  });
});
// ===============================
// Page Loader JS ends 
// ===============================

// ====================================
// js for the counter starts
// ====================================
// Function to animate counter
function animateCounter(counterElement, targetCount) {
  let currentCount = 0;
  const increment = Math.ceil(targetCount / 50); // Adjust the increment value for smooth animation

  const intervalId = setInterval(() => {
      currentCount += increment;
      if (currentCount >= targetCount) {
          currentCount = targetCount;
          clearInterval(intervalId);
      }
      counterElement.textContent = currentCount + "+"; // Add "+" sign
  }, 50); // Adjust the interval time for smoother animation
}

// Get all elements with class 'n-counter'
const counterElements = document.querySelectorAll('.n-counter');

// Loop through each counter element
counterElements.forEach(counterElement => {
  // Get the target count from the text content of the counter element
  const targetCount = parseInt(counterElement.textContent);

  // Animate the counter
  animateCounter(counterElement, targetCount);
});
// ====================================
// js for the counter ends
// ====================================

// ====================================
// ISOTOPES JS
// ====================================
$(function() {
  /* Isotope Gallery */

  // init isotope
  var $gallery = $(".tm-gallery").isotope({
    itemSelector: ".tm-gallery-item",
    layoutMode: "fitRows"
  });
  // layout Isotope after each image loads
  $gallery.imagesLoaded().progress(function() {
    $gallery.isotope("layout");
  });

  $(".filters-button-group").on("click", "a", function() {
    var filterValue = $(this).attr("data-filter");
    $gallery.isotope({ filter: filterValue });
    console.log("Filter value: " + filterValue);
  });

  /* Tabs */
  $(".tabgroup > div").hide();
  $(".tabgroup > div:first-of-type").show();
  $(".tabs a").click(function(e) {
    e.preventDefault();
    var $this = $(this),
      tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
      others = $this
        .closest("li")
        .siblings()
        .children("a"),
      target = $this.attr("href");
    others.removeClass("active");
    $this.addClass("active");

    // Scroll to tab content (for mobile)
    if ($(window).width() < 992) {
      $("html, body").animate(
        {
          scrollTop: $("#tmGallery").offset().top
        },
        200
      );
    }
  });
  
  // Magnific Pop up
  $('.tm-gallery').magnificPopup({
  		delegate: 'a',
	  	type: 'image',
		  gallery: { enabled: true }
		});
});
