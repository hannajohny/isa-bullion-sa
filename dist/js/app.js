jQuery(document).ready(($) => {
  const owlTestimonials = $('.owl-carousel-testimonials');
  (owlFeaturedArticles = $('.owl-carousel-featured-articles')),
    (copyTradeLicenseButton = $('#copy-tl-number')),
    (owlFeaturedCompanies = $('.owl-carousel-featured-companies'));

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

  owlFeaturedArticles.owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
  });

  owlFeaturedCompanies.owlCarousel({
    loop: true,
    margin: 0,
    autoplay: false,
    slideTransition: 'linear',
    autoplayHoverPause: false,
    touchDrag: true,
    mouseDrag: false,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
      800: {
        items: 3,
      },
      1200: {
        items: 5,
      },
      1600: {
        items: 5,
      },
    },
  });

  copyTradeLicenseButton.click(() => {
    navigator.clipboard.writeText('DMCC-31227');
    copyTradeLicenseButton.addClass('copied');
  });
});
