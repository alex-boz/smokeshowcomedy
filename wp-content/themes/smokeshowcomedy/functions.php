<?php
    function runScripts(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'mobile', get_template_directory_uri() . '/css/mobile.css', false, '1.0', 'all' );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true);
    }

    function register_my_menus(){
        register_nav_menus(
            array(
                'main-menu' => __('Main Menu')
            )
        );
    }

    runScripts();
    add_action('init', 'register_my_menus');
?>