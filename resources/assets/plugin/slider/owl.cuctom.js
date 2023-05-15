 $(document).ready(function() {
         
           /* single-slider */
           $('.single-slider').owlCarousel({
             loop: true,
             margin: 10,
             responsiveClass: true,
             autoplay:true,
             autoplayTimeout:5000,
             autoplayHoverPause:false,
             dots: false,
             responsive: {
               0: {
                 items: 1,
                 nav: true
               },
               600: {
                 items: 1,
                 nav: true
               },
               1000: {
                 items: 1,
                 nav: true,
                 loop: false,
                 margin: 20
               }
             }
           });
           /* single-slider end */
         
           /* products-slider */
           $('.products-slider').owlCarousel({
             loop: true,
             margin: 0,
             responsiveClass: true,
             autoplay:true,
             autoplayTimeout:5000,
             autoplayHoverPause:false,
             responsive: {
               0: {
                 items: 1,
                 nav: false
               },
               600: {
                 items: 2,
                 nav: false
               },
               1000: {
                 items: 4,
                 nav: false,
                 loop: false,
                 margin: 0
               }
             }
           });
           /* products-slider end */
         
           /* type */
           $('.testimonials-slider').owlCarousel({
             loop: true,
             margin: 10,
             responsiveClass: true,
             autoplay:true,
             autoplayTimeout:5000,
             autoplayHoverPause:false,
             responsive: {
               0: {
                 items: 1,
                 nav: false
               },
               600: {
                 items: 1,
                 nav: false
               },
               1000: {
                 items: 3,
                 nav: false,
                 loop: false,
                 margin: 20
               }
             }
           });
           /* type end */   


 /* logos-slider */
           $('.clients-slider').owlCarousel({
             loop: true,
             margin: 10,
             responsiveClass: true,
             autoplay:true,
             autoplayTimeout:5000,
             autoplayHoverPause:false,
              dots: false,
             responsive: {
               0: {
                 items: 2,
                 nav: false
               },
               600: {
                 items: 3,
                 nav: false
               },
               1000: {
                 items: 6,
                 nav: false,
                 loop: false,
                 margin: 20
               }
             }
           });
           /* logos-slider end */   





/* offer */
           $('.offer-slider').owlCarousel({
             loop: true,
             margin: 10,
             responsiveClass: true,
             autoplay:true,
             autoplayTimeout:5000,
             autoplayHoverPause:false,
             responsive: {
               0: {
                 items: 1,
                 nav: false
               },
               600: {
                 items: 2,
                 nav: false
               },
               1000: {
                 items: 4,
                 nav: false,
                 loop: false,
               }
             }
           });
           /* offer-slider end */


         })