<?php 

function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'jquery-3.3.1', get_template_directory_uri() . '/js/jquery-3.3.1.js');
	wp_enqueue_script( 'jquery.bxslider.min', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// Thumbnail
add_theme_support( 'post-thumbnails' );

// Header menu
register_nav_menu( 'menu', 'Menu in header' );

$args = array(
	'name'          => 'widget sidebar',
	'id'            => 'sidebar',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<ul class="list-group mb-3 list-group-flushaside-shadow widget-list aside-shadow">',
	'after_widget'  => '</ul>',
	'before_title'  => '<span class="list-group-item list-group-item-info">',
	'after_title'   => '</span>',
);

register_sidebar( $args );

?>