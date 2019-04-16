export default {
  init() {
    $('#project-carousel').owlCarousel({
        autoplay: false,
        loop: true,
        nav: false,
        autoWidth:true,
        items: 4,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
