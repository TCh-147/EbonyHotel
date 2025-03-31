<?php 

register_sidebar(array(
	'name' => __( 'Services Sidebar' ),
	'id' => 'sidebar-services',
	'description' => __( 'Widgets in this area.' ),
	'before_widget' => '<div class="services-sidebar">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="header"><h6><span class="widget-title">',
	'after_title'   => '</span></h6></div>'
));


register_nav_menu('top-menu', 'Menu Top');

add_theme_support( 'post-thumbnails' );

?>