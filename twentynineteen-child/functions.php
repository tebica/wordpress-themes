<?php
//Child Theme Functions File

add_action( 'wp_enqueue_scripts', 'enqueue_wp_child_theme' );

function enqueue_wp_child_theme() 
{
	wp_enqueue_style('parent-css', get_template_directory_uri().'/style.css' );

	//wp_enqueue_style('child-css', get_stylesheet_uri());

	wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true );
}



?>