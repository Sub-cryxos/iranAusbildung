$(document).ready(function () {
    $('.save-post').click((e)=>{
        $(e.target).toggleClass('save-post-active');
    })

    $('.like-comment').click(function (e) { 
        $(e.target).toggleClass('liked-comment-like');
    });

    
    $('.dislike-comment').click(function (e) { 
        $(e.target).toggleClass('disliked-comment-dislike');
    });

    const docheight = $(window).innerHeight();

    if(docheight > 900 ) {
        $('.mobile-access-list').addClass('mobile-access-list-900h');
       
    }

    $('.mobile-access-list').click(function (e) { 
        $('.mobile-access-list .access-list ').toggleClass('access-list-mobile-active ')
        
    });

    $(window).scroll((e)=>{
        var sticky = $('.accessibility_box'),
        scroll = $(window).scrollTop();

        if (scroll >= 7500) sticky.addClass('accessibility-header-fade');
        else sticky.removeClass('accessibility-header-fade');
    })

  
});