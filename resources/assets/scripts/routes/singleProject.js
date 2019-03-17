export default {
  init() {
    $('#project-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        nav: false,
        items: 3,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
