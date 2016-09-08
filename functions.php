<?php

/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'miotema_setup' ) ) {

	function miotema_setup() {

		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Thumbnail sizes
		add_image_size( 'miotema_single', 800, 493, true ); //(cropped)
		add_image_size( 'miotema_big', 1400, 928, true ); 	//(cropped)

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'miotema' ),
		) );

		// Load theme languages
		load_theme_textdomain( 'miotema', get_template_directory().'/languages' );

	}

}
add_action( 'after_setup_theme', 'miotema_setup' );

/*  Register sidebars
/* ------------------------------------ */
if ( ! function_exists( 'miotema_sidebars' ) ) {

	function miotema_sidebars()	{
		register_sidebar(array( 'name' => esc_html__( 'Primary', 'miotema' ),'id' => 'primary','description' => esc_html__( 'Normal full width sidebar.', 'miotema' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	}

}
add_action( 'widgets_init', 'miotema_sidebars' );


/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'miotema_styles_scripts' ) ) {

	function miotema_style_scripts() {

		//wp_enqueue_script('jquery');
		wp_enqueue_script( 'miotema-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );

		wp_enqueue_style( 'miotema-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');

		wp_enqueue_style( 'miotema-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');

		wp_enqueue_style( 'miotema', get_template_directory_uri().'/style.css');

	}

}
add_action( 'wp_enqueue_scripts', 'miotema_style_scripts' );


/*  Oembed Responsive
/* ------------------------------------ */
add_filter( 'embed_oembed_html', 'miotema_oembed_filter', 10, 4 ) ;

function miotema_oembed_filter($html, $url, $attr, $post_ID) {
	$return = '<figure class="video-container">'.$html.'</figure>';
	return $return;
}
