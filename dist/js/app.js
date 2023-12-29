jQuery(document).ready(($) => {
  console.log('App ready');

  const owlTestimonials = $('.owl-carousel-testimonials');
  owlTestimonials.owlCarousel({
    loop: true,
    margin: 0,
    stagePadding: 50,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 10000,
    autoplaySpeed: 10000,
    autoplayHoverPause: false,
    touchDrag: false,
    mouseDrag: false,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      800: {
        items: 2,
      },
      1200: {
        items: 3,
      },
      1600: {
        items: 3.5,
      },
    },
  });
});
