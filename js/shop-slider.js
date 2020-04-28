jQuery(document).ready(function($){
    const shopSlider = $('#shopSlider');
    shopSlider.owlCarousel({
        loop: true,
        dots: false,
        margin: 2,
        smartSpeed: 500,
        // autoplay: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },

            // breakpoints from 1200 up
            1254: {
                items: 3,
            },
        }
    });

    $('#shopSliderLeft').click(function() {
        shopSlider.trigger('prev.owl.carousel',);
    })

    $('#shopSliderRight').click(function () {
        shopSlider.trigger('next.owl.carousel');
    })

});
