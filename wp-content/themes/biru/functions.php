<?php

// Register Custom Post Type Biere
// Post Type Key: biere
function create_biere_cpt() {

	$labels = array(
		'name' => __( 'Bieres', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Biere', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Bieres', 'textdomain' ),
		'name_admin_bar' => __( 'Biere', 'textdomain' ),
		'archives' => __( 'Archives Biere', 'textdomain' ),
		'attributes' => __( 'Attributs Biere', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Biere:', 'textdomain' ),
		'all_items' => __( 'Toutes les Bieres', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel Biere', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel Biere', 'textdomain' ),
		'edit_item' => __( 'Modifier Biere', 'textdomain' ),
		'update_item' => __( 'Mettre à jour Biere', 'textdomain' ),
		'view_item' => __( 'Voir Biere', 'textdomain' ),
		'view_items' => __( 'Voir Bieres', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Biere', 'textdomain' ),
		'not_found' => __( 'Aucun Bieretrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Bieretrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans Biere', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Biere', 'textdomain' ),
		'items_list' => __( 'Liste Bieres', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Bieres', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Bieres', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Biere', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-bold',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array('biere', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'biere', $args );

}
add_action( 'init', 'create_biere_cpt', 0 );

// Register Custom Post Type Spot
// Post Type Key: spot
function create_spot_cpt() {

	$labels = array(
		'name' => __( 'Spots', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Spot', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Spots', 'textdomain' ),
		'name_admin_bar' => __( 'Spot', 'textdomain' ),
		'archives' => __( 'Archives Spot', 'textdomain' ),
		'attributes' => __( 'Attributs Spot', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Spot:', 'textdomain' ),
		'all_items' => __( 'Tous Spots', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel Spot', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel Spot', 'textdomain' ),
		'edit_item' => __( 'Modifier Spot', 'textdomain' ),
		'update_item' => __( 'Mettre à jour Spot', 'textdomain' ),
		'view_item' => __( 'Voir Spot', 'textdomain' ),
		'view_items' => __( 'Voir Spots', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Spot', 'textdomain' ),
		'not_found' => __( 'Aucun Spottrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Spottrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans Spot', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Spot', 'textdomain' ),
		'items_list' => __( 'Liste Spots', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Spots', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Spots', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Spot', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-location-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'spot', $args );

}
add_action( 'init', 'create_spot_cpt', 0 );

// Register Custom Post Type Gif
// Post Type Key: gif
function create_gif_cpt() {

	$labels = array(
		'name' => __( 'Gifs', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Gif', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Gifs', 'textdomain' ),
		'name_admin_bar' => __( 'Gif', 'textdomain' ),
		'archives' => __( 'Archives Gif', 'textdomain' ),
		'attributes' => __( 'Attributs Gif', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Gif:', 'textdomain' ),
		'all_items' => __( 'Tous Gifs', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel Gif', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel Gif', 'textdomain' ),
		'edit_item' => __( 'Modifier Gif', 'textdomain' ),
		'update_item' => __( 'Mettre à jour Gif', 'textdomain' ),
		'view_item' => __( 'Voir Gif', 'textdomain' ),
		'view_items' => __( 'Voir Gifs', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Gif', 'textdomain' ),
		'not_found' => __( 'Aucun Giftrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Giftrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans Gif', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Gif', 'textdomain' ),
		'items_list' => __( 'Liste Gifs', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Gifs', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Gifs', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Gif', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'editor', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gif', $args );

}
add_action( 'init', 'create_gif_cpt', 0 );

// Register Custom Post Type Packaging
// Post Type Key: packaging
function create_packaging_cpt() {

	$labels = array(
		'name' => __( 'Packagings', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Packaging', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Packagings', 'textdomain' ),
		'name_admin_bar' => __( 'Packaging', 'textdomain' ),
		'archives' => __( 'Archives Packaging', 'textdomain' ),
		'attributes' => __( 'Attributs Packaging', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Packaging:', 'textdomain' ),
		'all_items' => __( 'Tous Packagings', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel Packaging', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel Packaging', 'textdomain' ),
		'edit_item' => __( 'Modifier Packaging', 'textdomain' ),
		'update_item' => __( 'Mettre à jour Packaging', 'textdomain' ),
		'view_item' => __( 'Voir Packaging', 'textdomain' ),
		'view_items' => __( 'Voir Packagings', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Packaging', 'textdomain' ),
		'not_found' => __( 'Aucun Packagingtrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Packagingtrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans Packaging', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Packaging', 'textdomain' ),
		'items_list' => __( 'Liste Packagings', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Packagings', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Packagings', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Packaging', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-edit',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'packaging', $args );

}
add_action( 'init', 'create_packaging_cpt', 0 );

// Register Custom Post Type Citation
// Post Type Key: citation
function create_citation_cpt() {

	$labels = array(
		'name' => __( 'Citations', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Citation', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Citations', 'textdomain' ),
		'name_admin_bar' => __( 'Citation', 'textdomain' ),
		'archives' => __( 'Archives Citation', 'textdomain' ),
		'attributes' => __( 'Attributs Citation', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Citation:', 'textdomain' ),
		'all_items' => __( 'Tous Citations', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel Citation', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel Citation', 'textdomain' ),
		'edit_item' => __( 'Modifier Citation', 'textdomain' ),
		'update_item' => __( 'Mettre à jour Citation', 'textdomain' ),
		'view_item' => __( 'Voir Citation', 'textdomain' ),
		'view_items' => __( 'Voir Citations', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Citation', 'textdomain' ),
		'not_found' => __( 'Aucun Citationtrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Citationtrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans Citation', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Citation', 'textdomain' ),
		'items_list' => __( 'Liste Citations', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Citations', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Citations', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Citation', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'editor', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'citation', $args );

}
add_action( 'init', 'create_citation_cpt', 0 );

// Register Custom Post Type Follow
// Post Type Key: follow
function create_follow_cpt() {

	$labels = array(
		'name' => __( 'Follows', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Follow', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Follows', 'textdomain' ),
		'name_admin_bar' => __( 'Follow', 'textdomain' ),
		'archives' => __( 'Archives Follow', 'textdomain' ),
		'attributes' => __( 'Attributs Follow', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Follow:', 'textdomain' ),
		'all_items' => __( 'Tous Follows', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel Follow', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel Follow', 'textdomain' ),
		'edit_item' => __( 'Modifier Follow', 'textdomain' ),
		'update_item' => __( 'Mettre à jour Follow', 'textdomain' ),
		'view_item' => __( 'Voir Follow', 'textdomain' ),
		'view_items' => __( 'Voir Follows', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Follow', 'textdomain' ),
		'not_found' => __( 'Aucun Followtrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Followtrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans Follow', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Follow', 'textdomain' ),
		'items_list' => __( 'Liste Follows', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Follows', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Follows', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Follow', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-share',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'follow', $args );

}
add_action( 'init', 'create_follow_cpt', 0 );

add_theme_support( 'post-thumbnails' );

wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Roboto:400,700,900', false, '1.0', 'all' );