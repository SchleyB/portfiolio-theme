<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package portfolio-theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function portfolio_theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'portfolio_theme_body_classes' );

//Portfolio Custom Post type

function prefix_register_name() {

	$labels = array(
		'name'                => __( 'Portfolios', 'text-domain' ),
		'singular_name'       => __( 'Portfolio', 'text-domain' ),
		'add_new'             => _x( 'Add New Portfolio', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Portfolio', 'text-domain' ),
		'edit_item'           => __( 'Edit Portfolio', 'text-domain' ),
		'new_item'            => __( 'New Portfolio', 'text-domain' ),
		'view_item'           => __( 'View Portfolio', 'text-domain' ),
		'search_items'        => __( 'Search Portfolios', 'text-domain' ),
		'not_found'           => __( 'No Portfolios found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Portfolios found in Trash', 'text-domain' ),
		'menu_name'           => __( 'Portfolios', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title','thumbnail','editor','custom-fields',
			'revisions', 'post-formats'
			)
	);

	register_post_type( 'portfolios', $args );
}

add_action( 'init', 'prefix_register_name' );


/**
 * Define the metabox and field configurations.
 */
function portfolios_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_portfolio_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'portfolios_metabox',
        'title'         => __( 'Add up to four images', 'cmb2' ),
        'object_types'  => array( 'portfolios' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
		'name' => __( 'Test Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image1',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Test Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image2',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Test Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image3',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Test Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image4',
		'type' => 'file',
	) );

}

add_action( 'cmb2_init', 'portfolios_metaboxes' );
