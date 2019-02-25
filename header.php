<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Titillium+Web:300,400,700" rel="stylesheet"> 
    <!-- Scripts -->
    <script src="<?php bloginfo('template_url')?>/js/jquery-3.3.1.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.slides.js"></script>
    <script>
        $(function(){
            $("#slideshow").slidesjs({
                height: 300,
                navigation: false
            });
        });
    </script>
    <script src="<?php bloginfo('template_url')?>/js/popper.js"></script>
    <script src="<?php bloginfo('template_url')?>/bootstrap/js/bootstrap.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="container-fluid" style="background-image: url(<?php header_image(); ?>);">
        <div class="row align-items-center justify-content-center">
            <div id="logo" class="col-md-4 col-sm-6">
                <div class="row">
                    <p class="col-md-12"><?php bloginfo('name') ?></p>
                    <span class="col-md-12"><?php bloginfo('description') ?></span>
                </div>
            </div>
            <div id="image-logo" class="col-md-1 col-sm-6">
                <?php the_custom_logo(); ?>
            </div>
            <nav class="col-md-7 col-sm-12">
                <?php
                    wp_nav_menu(
                        array(
                            'container' => 'ul',
                            'menu_class' => 'nav justify-content-center',
                            'items_wrap' => '<ul id="menu-top">%3$s</ul>',
                            'theme_location' => 'menu'  
                    ));
                ?>
            </nav>
        </div>     
    </header>