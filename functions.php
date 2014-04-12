<?php
    // Adding HTML5 support to the theme.
    add_theme_support('html5', array('search-form'));
    
    //Adding post thumbnail support to the theme.
    add_theme_support('post-thumbnails');

    // Changes the login screen logo.
    function login_css() {
        wp_enqueue_style( 'login_css', get_template_directory_uri() . '/style.css' );
    }
    add_action('login_head', 'login_css');
	
    // Adding the main navigation to the menus list.
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'register_my_menu' );
?>