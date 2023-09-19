const jQuery = $ ;

$(document).ready(function () {
    $('.copon-text').click(function (e) { 
        e.preventDefault();
        $('.copon-code-form').removeClass('disabled-form')
        $('.copon-code-form').addClass('copon-code-active-form');
      
    });


});