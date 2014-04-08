<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('title') ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/nav_push.js"></script>
        <?php wp_head() ?>
    </head>
        
    <body>
        <div id="container">
            <header>
                <div id="banner">
                    <a href="<?php bloginfo('url') ?>" class="left"><div id="logo"></div></a>
                    <div id="search">
                        <?php get_search_form()?>
                    </div>
                </div>

            </header>
            <nav>
                <?php wp_nav_menu() ?>
            </nav>