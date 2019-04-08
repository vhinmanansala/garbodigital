export default {
  init() {
    $('#project-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        nav: false,
        autoWidth:true,
        responsive: {
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            },
        },
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
