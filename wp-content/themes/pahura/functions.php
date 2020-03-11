<?php
require_once get_template_directory() . '/navwalker.php';

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-menu-one' => __( 'Footer Menu One' ),
			'footer-menu-two' => __( 'Footer Menu Two' ),
		)
	);
}
add_action( 'init', 'register_my_menus' );



if (!function_exists('theme_enquee_scripts'))
{
	function theme_enquee_scripts()
	{
		wp_enqueue_style('MDB', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css', array('Bootstrap'));
		wp_enqueue_style('Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

		wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.3.1', true );
		wp_enqueue_script( 'Bootstrap_JS', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '1.0.0', true );









	}
}
add_action('wp_enqueue_scripts', 'theme_enquee_scripts');