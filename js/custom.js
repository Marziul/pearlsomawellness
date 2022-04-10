(function ($) {
	"use strict";

	
    
    $(document).ready(function(){ 
        $(window).scroll(function(){ 
            if ($(this).scrollTop() > 100) { 
                $('.sie-footer-menu_14-text').fadeIn(); 
            } else { 
                $('.sie-footer-menu_14-text').fadeOut(); 
            } 
        }); 
        $('.sie-footer-menu_14-text').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
    });
        
    jQuery(document).ready(function($){
        //  Default js start
    

		
		$('.about_active').slick({
            slidesToShow: 1,
            arrows: true,
            fade: false,
			autoplay: false
         });
		
        
       

        $('.wl10_section').slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 1,
            arrows: true,
            fade: false,
        });
	
    
     });
	
	
	
	
	
}(jQuery));





