<?php

if(!function_exists('eruma_yon_setup')):
    function eruma_yon_setup(){
        load_theme_textdomain('eruma-yon', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        
        add_theme_support( 'custom-logo', array(
            'height'      => 248,
            'width'       => 248,
            'flex-height' => true,
        ));
        
        // Register Menus
        register_nav_menus( array(
            'primary' => esc_html__('Primary Menu', 'eruma-yon'),
        ));
        
        // Change default core markup for the items to html5 code.
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }
endif; // eruma_yon_setup
add_action( 'after_setup_theme', 'eruma_yon_setup' );


if(!function_exists('eruma_yon_the_custom_logo')):
function eruma_yon_the_custom_logo(){
	if (function_exists('the_custom_logo')){
		the_custom_logo();
	}
}
endif;

function eruma_yon_scripts() {
    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic|Oswald:400,700,300|Vollkorn:400,400italic|Source+Code+Pro:300', false);
    
	wp_enqueue_style('eruma-yon-style', get_stylesheet_uri());

	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/baf6baca4e.js', false);
    wp_enqueue_script('eruma-yon-navigation', get_template_directory_uri() . '/scripts/responsive-nav.min.js', false);
}
add_action('wp_enqueue_scripts', 'eruma_yon_scripts');