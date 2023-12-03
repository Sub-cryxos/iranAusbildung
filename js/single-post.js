$(document).ready(  function () {
    $('.save-post').click(function () {
        $('.save-post').toggleClass('save-post-active');
    })

    $('.like-btn').click(function (e) { 
        $(e.target).toggleClass('active-like-btn');
    });

    
    $('.dislike').click(function (e) { 
        $(e.target).toggleClass('active-dislike ');
    });

   

    $('.like-comment').click(function (e) { 
        $(e.target).toggleClass('liked-comment-like');
    });

    
    $('.dislike-comment').click(function (e) { 
        $(e.target).toggleClass('disliked-comment-dislike');
    });

});