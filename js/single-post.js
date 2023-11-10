$(document).ready(function () {
    $('.save-post').click((e)=>{
        $('.save-post').toggleClass('save-post-active');
    })

    $('.like-btn').click(function (e) { 
        $(e.target).toggleClass('active-like-btn');
    });

    
    $('.dislike').click(function (e) { 
        $(e.target).toggleClass('active-dislike ');
    });
});