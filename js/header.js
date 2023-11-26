$(document).ready(function () {
    $(window).scroll(function(){
        var sticky = $('.sticky-header'),
            scroll = $(window).scrollTop();
      
        if (scroll >=100) sticky.addClass('sticky-header-active');
        else sticky.removeClass('sticky-header-active');
      });
  
      $('.side-activator').click(function (e) { 
        $('.mobile-navbar').addClass('mobile-navbar-active');
        
      });
  
      $('.mobile-header-close').click(function (e) { 
        
        $('.mobile-navbar').removeClass('mobile-navbar-active');
        
      });
    
});