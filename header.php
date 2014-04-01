<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('title')?>')?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
        <?php wp_head()?>
    </head>
        
    <body>
        <div id="container">
            <header>
                <h1><?php bloginfo('name')?></h1>
                <nav>
                    <?php wp_nav_menu()?>
                </nav>
            </header>