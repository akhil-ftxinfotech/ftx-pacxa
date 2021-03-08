<?php 
	add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_enqueue_styles' );
	function wp_bootstrap_starter_child_enqueue_styles() {
 		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_register_style('style', get_stylesheet_directory_uri() . '/dist/app.css');
 		wp_enqueue_style('style'); 
 	} 
 ?>