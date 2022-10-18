<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function issue_setup() {
	load_theme_textdomain( 'issue', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'top-menu' => esc_html__( 'Primary', 'issue' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
		)
	);
}
add_action( 'after_setup_theme', 'issue_setup' );

function issue_scripts() {
	wp_enqueue_style('issue-main', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);
	wp_enqueue_style( 'issue-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script( 'issue-navigation', get_template_directory_uri() . '/js/app.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'issue-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js', array('jquery'), _S_VERSION, true );
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'issue_scripts' );

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_action('init', 'register_post_types');



require get_template_directory() . '/inc/template-functions.php';
