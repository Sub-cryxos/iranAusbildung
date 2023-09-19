<?php


function add_theme_scripts(){
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/bootstrap/css/bootstrap.rtl.min.css' , array() , false , 'all');
    wp_enqueue_style('swiper' , get_template_directory_uri() . '/swiper/swiper-bundle.min.css' , array() , false , 'all');
    wp_enqueue_style('header.theme' , get_template_directory_uri() . '/style/header.css' , array() , false , 'all');
    wp_enqueue_style('footer.theme' , get_template_directory_uri() . '/style/footer.css' , array() , false , 'all');
    wp_enqueue_style('social-media.theme' , get_template_directory_uri() . '/style/social-media.css' , array() , false , 'all');
    wp_enqueue_style('responsive.theme' , get_template_directory_uri() . '/style/reponsive.css' , array() , false , 'all');
    // wp_enqueue_style('index.theme' , get_template_directory_uri() . './style/index.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');

    // javascript source

    wp_enqueue_script('jq' , get_template_directory_uri() . '/jquery/code.jquery.com_jquery-3.7.0.min.js' , array() , false , true);
    wp_enqueue_script('slider.js' , get_template_directory_uri() . '/js/slider.js' , array('jquery') , false , true);
    wp_enqueue_script('swiper' , get_template_directory_uri() . '/swiper/swiper-bundle.min.js' , array('jquery') , false , true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//add support img and title tag in site
function title_setup(){
    add_theme_support('title-tag');
    // add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme' , 'title_setup');



//the_expert()
function custom_excerpt_length($length) {
    return 20; // تعداد کلمات مورد نظر برای نمایش خلاصه
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return ' ...'; // متن بعد از خلاصه نوشته (می‌توانید تغییر دهید)
}
add_filter('excerpt_more', 'custom_excerpt_more');
