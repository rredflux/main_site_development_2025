<?php

/*
 * Plugin Name: FAQ Post
 */

 add_action( 'init', 'faQPostType' );

 function faQPostType() {
 
    $labels = array(
 
       'name'                     => __( 'Announcements', 'faq_post' ),
       'singular_name'            => __( 'Announcement', 'faq_post' ),
       'add_new'                  => __( 'Add New', 'faq_post' ),
       'add_new_item'             => __( 'Add New Announcement', 'faq_post' ),
       'edit_item'                => __( 'Edit Announcement', 'faq_post' ),
       'new_item'                 => __( 'New Announcement', 'faq_post' ),
       'view_item'                => __( 'View Announcement', 'faq_post' ),
       'view_items'               => __( 'View Announcements', 'faq_post' ),
       'search_items'             => __( 'Search Announcements', 'faq_post' ),
       'not_found'                => __( 'No Announcements found.', 'faq_post' ),
       'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'faq_post' ),
       'parent_item_colon'        => __( 'Parent Announcements:', 'faq_post' ),
       'all_items'                => __( 'All Announcements', 'faq_post' ),
       'archives'                 => __( 'Announcement Archives', 'faq_post' ),
       'attributes'               => __( 'Announcement Attributes', 'faq_post' ),
       'insert_into_item'         => __( 'Insert into Announcement', 'faq_post' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'faq_post' ),
       'featured_image'           => __( 'Featured Image', 'faq_post' ),
       'set_featured_image'       => __( 'Set featured image', 'faq_post' ),
       'remove_featured_image'    => __( 'Remove featured image', 'faq_post' ),
       'use_featured_image'       => __( 'Use as featured image', 'faq_post' ),
       'menu_name'                => __( 'Announcements', 'faq_post' ),
       'filter_items_list'        => __( 'Filter Announcement list', 'faq_post' ),
       'filter_by_date'           => __( 'Filter by date', 'faq_post' ),
       'items_list_navigation'    => __( 'Announcements list navigation', 'faq_post' ),
       'items_list'               => __( 'Announcements list', 'faq_post' ),
       'item_published'           => __( 'Announcement published.', 'faq_post' ),
       'item_published_privately' => __( 'Announcement published privately.', 'faq_post' ),
       'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'faq_post' ),
       'item_scheduled'           => __( 'Announcement scheduled.', 'faq_post' ),
       'item_updated'             => __( 'Announcement updated.', 'faq_post' ),
       'item_link'                => __( 'Announcement Link', 'faq_post' ),
       'item_link_description'    => __( 'A link to an announcement.', 'faq_post' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company announcements', 'faq_post' ),
       'public'                => false,
       'hierarchical'          => false,
       'exclude_from_search'   => true,
       'publicly_queryable'    => false,
       'show_ui'               => true,
       'show_in_menu'          => true,
       'show_in_nav_menus'     => false,
       'show_in_admin_bar'     => false,
       'show_in_rest'          => true,
       'menu_position'         => null,
       'menu_icon'             => 'dashicons-megaphone',
       'capability_type'       => 'post',
       'capabilities'          => array(),
       'supports'              => array( 'title', 'editor', 'revisions' ),
       'taxonomies'            => array(),
       'has_archive'           => false,
       'rewrite'               => array( 'slug' => 'announcement' ),
       'query_var'             => true,
       'can_export'            => true,
       'delete_with_user'      => false,
       'template'              => array(),
       'template_lock'         => false,
 
    );
 
    register_post_type( 'faQPostType', $args );
 
 }