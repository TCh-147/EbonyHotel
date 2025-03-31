<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebony Manor Hotel</title>
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/Images/tab_icon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/site-style.css"/>
</head>
<body>


    <div class="top-menu">
        <img class="menu-img" src="<?php bloginfo('template_directory'); ?>/Images/tab_icon.ico"/>
        <?php 
            wp_nav_menu(array(
                'theme_location'  => 'top-menu',
                'menu'            => 'navigation',
                'container'       => 'nav',
                'container_id'    => 'main-nav',
                'container_class'    => '',
                'menu_class'      => 'menu-list',
                'menu_id'         => 'idm',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            ));
        ?>
    </div>

    <div class="hero-banner">

        <img class="banner-image" src="<?php bloginfo('template_directory'); ?>/Images/hero-banner.jpg">
        <img class="banner-name" src="<?php bloginfo('template_directory'); ?>/Images/hotel-name.png">

    </div>