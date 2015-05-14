<?php




function stylesheet() {
        wp_enqueue_style('style', get_stylesheet_uri());

}

add_action( 'wp_enqueue_scripts', 'stylesheet' );


function theme_setup() {
        add_theme_support('post-thumbnails');
        add_image_size('small-thumbnail');
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));
        add_image_size('banner-img');
        add_image_size('sidebar-thumbnail', 100, 100, true, array('top', 'left'));
        add_theme_support('title-tag');
        

}

add_action('after_setup_theme', 'theme_setup');

?>