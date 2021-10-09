(function ($) {
    "use strict";
$('.landing-slider').owlCarousel({
    center: true,
    items:5,
    loop:true,
    margin: 30,
    nav: false,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive: {
         320:{
            items:1
        },
         420:{
            items:2
        },
        600:{
            items:3
        },
        1366: {
            items:5
        }
    }
});
$('.layout-slider').owlCarousel({    
    items:4,
    loop:true,
    margin: 30,
    nav: false,
    autoplay: false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
     responsive: {
         320:{
            items:1
        },
        600:{
            items:2
         },
        1366:{
            items:3
        },

        1660: {
            items:4
         }
        
    }
});
    $('.prooduct-details-box .close').on('click', function (e) {
        var tets = $(this).parent().parent().parent().parent().addClass('d-none');
        console.log(tets);
    })
   })(jQuery);