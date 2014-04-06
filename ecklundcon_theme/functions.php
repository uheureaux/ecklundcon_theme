<?php
    // Adding HTML5 support to the theme.
    add_theme_support('html5', array('search-form')); ?>

<?php if (function_exists('register_sidebar')) { register_sidebar( array(
    'name' => 'Search Bar',
    'id' => 'search',
    'description' => 'The search',
    'class' => 'sidebar',
    'before_widget' => '<div id="search" class="right">',
    'after_widget' => '</div>' ));} ?>

<?php if (function_exists('register_sidebar')) { register_sidebar( array(
    'name' => 'Recent Posts',
    'id' => 'recent_posts',
    'description' => 'The first sidebar of the theme!',
    'class' => 'sidebar',
    'before_widget' => '<div id="recent_posts">',
    'after_widget' => '</div>',
    'before_title' => '<h3 id="recent_posts_title">',
    'after_title' => '</h3>' ));}?>

<?php
    // Changes the login screen logo.
    function login_css() {
    wp_enqueue_style( 'login_css', get_template_directory_uri() . '/style.css' );
    }
    add_action('login_head', 'login_css'); ?>