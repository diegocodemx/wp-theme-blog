<?php
    register_nav_menu('menu','Menu superior');
    register_nav_menu('social-menu','Menu social inferior');

    add_theme_support('post-thumbnails');
    add_image_size('slider_thumbs', 470, 280, true);
    add_image_size('list_articles_thumbs', 450, 370, true);

    register_sidebar( array(
        'name' => 'Sidebar',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => 'Footer',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    add_theme_support( 'custom-logo', array(
		'width'       => 75,
		'height'      => 75,
		'flex-width'  => true,
    ) );

    add_theme_support( 'custom-header', array(
        'uploads'       => true,
        'flex-height'   => true,
        'default-text-color' => '#000',
        'header-text' => true,
        'height' => '120',
        'width'  => '1260'
    ) );
?>