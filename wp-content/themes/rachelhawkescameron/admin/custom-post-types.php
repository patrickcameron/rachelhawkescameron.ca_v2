<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Galleries.
	 */

	$labels = array(
		"name" => __( "Galleries", "" ),
		"singular_name" => __( "Gallery", "" ),
	);

	$args = array(
		"label" => __( "Galleries", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "gallery", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
