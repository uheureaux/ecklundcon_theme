<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('title')?>')?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <?php wp_head()?>
    </head>
        
    <body>
        <div id="container">
            <header>
                <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h1>
                <nav>
                    <?php wp_nav_menu()?>
                </nav>
            </header>