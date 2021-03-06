<?php /*
   Plugin Name: Musicom
   Plugin URI: https://www.genetechsolutions.com/
   description:A plugin to create musicom
   Version: 1.0
   Author: Noman Ghani */


   // Register Custom Musicom
function musicom_post_type() {

	$labels = array(
		'name'                  => _x( 'Musicoms', 'Musicom General Name', 'musicom' ),
		'singular_name'         => _x( 'Musicom', 'Musicom Singular Name', 'musicom' ),
		'menu_name'             => __( 'Musicoms', 'musicom' ),
		'name_admin_bar'        => __( 'Musicom', 'musicom' ),
		'archives'              => __( 'Item Archives', 'musicom' ),
		'attributes'            => __( 'Item Attributes', 'musicom' ),
		'parent_item_colon'     => __( 'Parent Item:', 'musicom' ),
		'all_items'             => __( 'All Items', 'musicom' ),
		'add_new_item'          => __( 'Add New Item', 'musicom' ),
		'add_new'               => __( 'Add New', 'musicom' ),
		'new_item'              => __( 'New Item', 'musicom' ),
		'edit_item'             => __( 'Edit Item', 'musicom' ),
		'update_item'           => __( 'Update Item', 'musicom' ),
		'view_item'             => __( 'View Item', 'musicom' ),
		'view_items'            => __( 'View Items', 'musicom' ),
		'search_items'          => __( 'Search Item', 'musicom' ),
		'not_found'             => __( 'Not found', 'musicom' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'musicom' ),
		'featured_image'        => __( 'Featured Image', 'musicom' ),
		'set_featured_image'    => __( 'Set featured image', 'musicom' ),
		'remove_featured_image' => __( 'Remove featured image', 'musicom' ),
		'use_featured_image'    => __( 'Use as featured image', 'musicom' ),
		'insert_into_item'      => __( 'Insert into item', 'musicom' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'musicom' ),
		'items_list'            => __( 'Items list', 'musicom' ),
		'items_list_navigation' => __( 'Items list navigation', 'musicom' ),
		'filter_items_list'     => __( 'Filter items list', 'musicom' ),
	);
	$args = array(
		'label'                 => __( 'Musicom', 'musicom' ),
		'description'           => __( 'Musicom Description', 'musicom' ),
		'labels'                => $labels,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        "rewrite"               => [ "slug" => "musicom"],
		"query_var"             => true,
		"supports"              => [ "title", "editor", "thumbnail", "revisions", "author","excerpt" ],
	);
	register_post_type( 'musicom', $args );

}
add_action( 'init', 'musicom_post_type');
   

