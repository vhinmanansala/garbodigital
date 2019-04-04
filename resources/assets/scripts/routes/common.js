export default {
  init() {
    $('#customer-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        nav: false,
        responsive: {
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:8,
            },
        },
    });

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    $('.mobile-menu-icon i').click(function() {
        if ($(this).hasClass('fa-bars')) {
            $(this).removeClass('fa-bars').addClass('fa-times');
        } else if ($(this).hasClass('fa-times')) {
            $(this).removeClass('fa-times').addClass('fa-bars');
        }

        $('#mobile-menu-container').animate({
            height: 'toggle',
        }, 500);
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
