export default {
  init() {
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        nav: false,
        items: 8,
    });

    $('.flexslider').flexslider({
        slideshow: true,
        animation: 'fade',
        pauseOnHover: true,
        controlNav: true,
        directionNav: false,
        slideshowSpeed: 3000,
        animationLoop: true,
        prevText: '',
        nextText: '',
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
