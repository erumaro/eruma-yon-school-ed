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
        
        // Custom background support with default background
        add_theme_support('custom-background', apply_filters( 'eruma_yon_custom_background_args', array(
            'default-color' => '606048',
            'default-image' => '%1$s/images/bg.jpg',
            'default-repeat' => 'no-repeat',
            'default-position-x' => 'center',
            'default-attachment' => 'fixed',
        )));
    }
endif; // eruma_yon_setup
add_action( 'after_setup_theme', 'eruma_yon_setup' );

function eruma_yon_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'eruma-yon' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'This the sidebar for the blog', 'eruma-yon' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'eruma-yon' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the footer section of the site.', 'chessbox' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eruma_yon_widgets_init' );


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


require get_template_directory() . '/inc/template-tags.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';