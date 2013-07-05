<?php 

/*
| Stylesheets
|----------------------------------------------------------------------
*/

function add_stylesheets()
{
	// add here your css files
	wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css');
}

add_action('wp_enqueue_styles', 'add_stylesheets');

/*
| Javascripts
|----------------------------------------------------------------------
*/

function add_javascripts()
{
	// add here your js files
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js');
}

add_action('wp_enqueue_scripts', 'add_javascripts');