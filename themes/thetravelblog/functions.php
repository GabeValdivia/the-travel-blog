<?php
    function ttb_styles(){

        wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('bootsrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('ttb_stylesheet', get_stylesheet_uri() );

        wp_enqueue_script('jquery');
        wp_enqueue_script('boostrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);

    }
    add_action('wp_enqueue_scripts', 'ttb_styles');

    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'thetravelblog')
    ));

    add_theme_support('post-thumbnails');
?>