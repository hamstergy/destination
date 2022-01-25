<?php
  if ( !isset( $content_width ) ) $content_width = 768;
  if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
  if ( function_exists( 'register_nav_menu' ) ) register_nav_menu( 'menu', 'Menu' );
  if ( function_exists('register_sidebar') ) register_sidebar( array(
    'name' => __( 'Widgets', 'simplest' ),
    'id' => 'widgets',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div><!-- widget -->',
    'before_title' => '<h4>',
    'after_title' => '</h4>') );




function enqueue_styles() {

	// wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600', array(), '1.0', 'all' );
	// wp_enqueue_style( 'fonts' );

	$path = '/css/styles.css';
	$version = filemtime( get_template_directory() . $path );
	wp_register_style( 'theme', get_template_directory_uri() . $path, array(), $version, 'all' );
	wp_enqueue_style( 'theme' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
?>