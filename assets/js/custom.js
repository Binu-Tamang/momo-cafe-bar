// testimonial owl slider reviews
$(".owl-carousel.testimonial-owl").owlCarousel({
  loop: true,
  autoplay: true,
  items: 1,
  margin: 20,
  stagePadding: 5,
  nav: false,
  center: false,
  responsive: {
    0: {
      items: 1,
    },
    800: {
      items: 3,
    },
  },
});
