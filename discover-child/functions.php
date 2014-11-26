<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* MH Customized Image Size */
function discover_custom_header_setup() {
	$args = array(
		'default-image'          => '',
		'default-text-color'     => 'fd7800',
		'width'                  => 296,
		'height'                 => 105,
		'flex-height'            => true,
		'wp-head-callback'       => 'discover_header_style',
		'admin-head-callback'    => 'discover_admin_header_style',
		'admin-preview-callback' => 'discover_admin_header_image',
	);

	$args = apply_filters( 'discover_custom_header_args', $args );
	add_theme_support( 'custom-header', $args );

}

add_action('after_setup_theme', 'discover_custom_header_setup');

function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Info Sidebar', 'wpb' ),
		'id' => 'sidebar-info',
		'description' => __( 'The info sidebar appears on the left on each info page', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'Front Page Sidebar', 'wpb'),
		'id' => 'sidebar-front',
		'description' => __( 'Appears on the static front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );


add_action('init', 'cptui_register_my_cpt_movie');
function cptui_register_my_cpt_movie() {
register_post_type('movie', array(
'label' => 'Movies',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'movie', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Movies',
  'singular_name' => 'Movie',
  'menu_name' => 'Movies',
  'add_new' => 'Add Movie',
  'add_new_item' => 'Add New Movie',
  'edit' => 'Edit',
  'edit_item' => 'Edit Movie',
  'new_item' => 'New Movie',
  'view' => 'View Movie',
  'view_item' => 'View Movie',
  'search_items' => 'Search Movies',
  'not_found' => 'No Movies Found',
  'not_found_in_trash' => 'No Movies Found in Trash',
  'parent' => 'Parent Movie',
)
) ); }
?>

