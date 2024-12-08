<?php
// Register Custom Post Type
function create_service_post_type() {
    $labels = array(
        'name'               => _x('Service', 'Post Type General Name', 'textdomain'),
        'singular_name'      => _x('Service', 'Post Type Singular Name', 'textdomain'),
        'menu_name'          => __('Service', 'textdomain'),
        'name_admin_bar'     => __('Service', 'textdomain'),
        'archives'           => __('Service Archives', 'textdomain'),
        'attributes'         => __('Service Attributes', 'textdomain'),
        'parent_item_colon'  => __('Parent Service:', 'textdomain'),
        'all_items'          => __('All Service', 'textdomain'),
        'add_new_item'       => __('Add New Service', 'textdomain'),
        'add_new'            => __('Add New', 'textdomain'),
        'new_item'           => __('New Service', 'textdomain'),
        'edit_item'          => __('Edit Service', 'textdomain'),
        'update_item'        => __('Update Service', 'textdomain'),
        'view_item'          => __('View Service', 'textdomain'),
        'view_items'         => __('View Service', 'textdomain'),
        'search_items'       => __('Search Service', 'textdomain'),
        'not_found'          => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
        'featured_image'     => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image' => __('Use as featured image', 'textdomain'),
        'insert_into_item'   => __('Insert into Service', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this Service', 'textdomain'),
        'items_list'         => __('Service list', 'textdomain'),
        'items_list_navigation' => __('Service list navigation', 'textdomain'),
        'filter_items_list'  => __('Filter Service list', 'textdomain'),
    );

    $args = array(
        'label'              => __('Service', 'textdomain'),
        'description'        => __('Post Type for Service', 'textdomain'),
        'labels'             => $labels,
        'supports'           => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions'),
        'taxonomies'         => array('category', 'post_tag'), // Add built-in taxonomies
        'hierarchical'       => false,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-book', // Dashicon for the menu
        'show_in_admin_bar'  => true,
        'show_in_nav_menus'  => true,
        'can_export'         => true,
        'has_archive'        => true, // Enable archive page
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'capability_type'    => 'post', // Use 'page' for page-like behavior
        'rewrite'            => array('slug' => 'service'), // Custom URL slug
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type('service', $args);
}
add_action('init', 'create_service_post_type', 0);