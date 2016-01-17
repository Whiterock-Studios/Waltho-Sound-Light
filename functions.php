<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('page-templates' );

///////////////////////////////////////////////////////
// Enqueue main //
///////////////////////////////////////////////////////
function main_enqueue() {


	wp_register_script( 'main', get_template_directory_uri().'/assets/scripts/main.min.js', array( jquery ), '0.1.0', true );

	wp_enqueue_script( 'main' );

}

add_action( 'wp_enqueue_scripts', 'main_enqueue' );

///////////////////////////////////////////////////////

///////////////////////////////////////////////////////
// Navigation Menu's //
///////////////////////////////////////////////////////
function register_my_menu() {

  register_nav_menu('main_menu',__( 'Main Menu' ));
  register_nav_menu('social_menu',__( 'Social Menu' ));
  register_nav_menu('footer_menu',__( 'Footer Menu' ));

}

add_action( 'init', 'register_my_menu' );

///////////////////////////////////////////////////////

function sound_equipment() {

	$labels = array(
		'name'                => __( 'Sound Products', 'text-domain' ),
		'singular_name'       => __( 'Sound Product', 'text-domain' ),
		'menu_name'			  => 'Sound',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'menu_icon'			  => 'dashicons-format-audio',
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'thumbnail',	'revisions', 'editor'
			)
	);

	register_post_type( 'sound-equipment', $args );
}

add_action( 'init', 'sound_equipment' );

/////////////////////////////////////////////////

function lighting_equipment() {

	$labels = array(
		'name'                => __( 'Lighting Products', 'text-domain' ),
		'singular_name'       => __( 'Lighting Product', 'text-domain' ),
		'menu_name'			  => 'Lighting',	
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'public'              => true,
		'menu_icon'			  => 'dashicons-lightbulb',
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'thumbnail', 'revisions', 'editor'
			)
	);

	register_post_type( 'lighting-equipment', $args );
}

add_action( 'init', 'lighting_equipment' );

////////////////////////////////////////////////

function structure_equipment() {

	$labels = array(
		'name'                => __( 'Structure Products', 'text-domain' ),
		'singular_name'       => __( 'Structure Product', 'text-domain' ),
		'menu_name'			  => 'Structure',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'			  => 'dashicons-tagcloud',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'thumbnail', 'revisions', 'editor'
			)
	);

	register_post_type( 'structure-equipment', $args );
}

add_action( 'init', 'structure_equipment' );


/////////////////////////////////////////

add_action( 'init', 'packages' );

function packages() {

	$labels = array(
		'name'                => __( 'Packages', 'text-domain' ),
		'singular_name'       => __( 'Package', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'public'              => true,
		'menu_icon'			  => 'dashicons-archive',
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'thumbnail',	'revisions', 'editor'
			)
	);

	register_post_type( 'packages', $args );
}

add_action( 'init', 'packages' );

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function slides() {

	$labels = array(
		'name'                => __( 'Slides', 'text-domain' ),
		'singular_name'       => __( 'Slide', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'Slides for the slideshow on the home page',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title','thumbnail','revisions'
			)
	);

	register_post_type( 'slides', $args );
}

add_action( 'init', 'slides' );

// Change length ad ending of excerpts

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');