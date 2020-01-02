<?php
    function ttb_styles(){
        wp_enqueue_style('ttb_stylesheet', get_stylesheet_uri() );
    }
    add_action('wp_enqueue_scripts', 'ttb_styles');
?>