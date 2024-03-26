$(document).ready(function () {
  $(".owl-carousel.banner-slider").owlCarousel({
    loop: true, // Enable loop
    margin: 20, // Margin between items
    nav: false, // Disable navigation buttons
    dots: true, // Enable dots navigation
    autoplayTimeout: 5000,
    navSpeed: 2000,
    dotsContainer: '#circlebanner',
    dotsData: true,
    autoplay: true, // Enable autoplay
    responsive: {
      // Responsive breakpoints
      0: {
        items: 1, // Number of items to display on mobile devices
      },
      768: {
        items: 1, // Number of items to display on tablets
      },
      992: {
        items: 1, // Number of items to display on desktops
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
      items: 1, // Number of items to display on mobile devices
    },
    768: {
      items: 1, // Number of items to display on tablets
    },
    992: {
      items: 1, // Number of items to display on desktops
    },
  },
});

// Scroll top to bottom js starts
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


// ===============mouse move parallax effect js===================
document.addEventListener("mousemove", parallax);

function parallax(event) {
    this.querySelectorAll(".mouse").forEach((shift) => {
        const position = shift.getAttribute("value");
        const x = (window.innerWidth - event.pageX * position) / 90;
        const y = (window.innerHeight - event.pageY * position) / 90;

        shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
}


