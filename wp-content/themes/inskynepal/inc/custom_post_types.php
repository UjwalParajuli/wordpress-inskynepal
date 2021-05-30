<?php
    // CUSTOM POST TYPES
    function inskynepal_custom_post_packages(){
        $labels = array(
            'name' => _x( 'Packages', 'inskynepal'),
            'singular_name' => _x( 'Package', 'post type singular name', 'inskynepal'),
            'menu_name' => _x('Packages', 'admin menu', 'inskynepal'),
            'name_admin_bar' => _x('Packages', 'add new on admin bar', 'inskynepal'),
            'add_new' => _x('Add New', 'book', 'inskynepal'),
            'add_new_item' => __('Add New Package', 'inskynepal'),
            'new_item' => __('New Package', 'inskynepal'),
            'edit_item' => __('Edit Package', 'inskynepal'),
            'view_item' => __('View Package', 'inskynepal'),
            'all_items' => __('All Packages', 'inskynepal'),
            'search_items' => __('Search Packages', 'inskynepal'),
            'parent_item_colon' => __('Parent Package:', 'inskynepal'),
            'not_found' => __('No Packages Found', 'inskynepal'),
            'not_found_in_trash' => __('No Packages Found in Trash', 'inskynepal')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'inskynepal'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'packages' ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 6,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            //'taxonomies' => array( 'category'),
    
        );

        register_post_type('packages', $args);

    }
    add_action('init', 'inskynepal_custom_post_packages');

    function inskynepal_custom_post_teams(){
        $labels = array(
            'name' => _x( 'Our Team', 'inskynepal'),
            'singular_name' => _x( 'Team', 'post type singular name', 'inskynepal'),
            'menu_name' => _x('Our Team', 'admin menu', 'inskynepal'),
            'name_admin_bar' => _x('Teams', 'add new on admin bar', 'inskynepal'),
            'add_new' => _x('Add New Staff', 'book', 'inskynepal'),
            'add_new_item' => __('Add New Staff', 'inskynepal'),
            'new_item' => __('New Staff', 'inskynepal'),
            'edit_item' => __('Edit Staff', 'inskynepal'),
            'view_item' => __('View Staff', 'inskynepal'),
            'all_items' => __('All Staffs', 'inskynepal'),
            'search_items' => __('Search Staffs', 'inskynepal'),
            'parent_item_colon' => __('Parent Staff:', 'inskynepal'),
            'not_found' => __('No Staffs Found', 'inskynepal'),
            'not_found_in_trash' => __('No Staffs Found in Trash', 'inskynepal')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'inskynepal'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'teams' ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 7,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            //'taxonomies' => array( 'category'),
    
        );

        register_post_type('teams', $args);

    }
    add_action('init', 'inskynepal_custom_post_teams');


    function inskynepal_custom_post_reviews(){
        $labels = array(
            'name' => _x( 'Reviews', 'inskynepal'),
            'singular_name' => _x( 'Review', 'post type singular name', 'inskynepal'),
            'menu_name' => _x('Reviews', 'admin menu', 'inskynepal'),
            'name_admin_bar' => _x('Reviews', 'add new on admin bar', 'inskynepal'),
            'add_new' => _x('Add New Review', 'book', 'inskynepal'),
            'add_new_item' => __('Add New Review', 'inskynepal'),
            'new_item' => __('New Review', 'inskynepal'),
            'edit_item' => __('Edit Review', 'inskynepal'),
            'view_item' => __('View Review', 'inskynepal'),
            'all_items' => __('All Reviews', 'inskynepal'),
            'search_items' => __('Search Reviews', 'inskynepal'),
            'parent_item_colon' => __('Parent Review:', 'inskynepal'),
            'not_found' => __('No Reviews Found', 'inskynepal'),
            'not_found_in_trash' => __('No Reviews Found in Trash', 'inskynepal')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'inskynepal'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'reviews' ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 8,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            //'taxonomies' => array( 'category'),
    
        );

        register_post_type('reviews', $args);

    }
    add_action('init', 'inskynepal_custom_post_reviews');


    function inskynepal_custom_post_faq(){
        $labels = array(
            'name' => _x( 'FAQs', 'inskynepal'),
            'singular_name' => _x( 'FAQ', 'post type singular name', 'inskynepal'),
            'menu_name' => _x('FAQs', 'admin menu', 'inskynepal'),
            'name_admin_bar' => _x('FAQs', 'add new on admin bar', 'inskynepal'),
            'add_new' => _x('Add New FAQ', 'book', 'inskynepal'),
            'add_new_item' => __('Add New FAQ', 'inskynepal'),
            'new_item' => __('New FAQ', 'inskynepal'),
            'edit_item' => __('Edit FAQ', 'inskynepal'),
            'view_item' => __('View FAQ', 'inskynepal'),
            'all_items' => __('All FAQs', 'inskynepal'),
            'search_items' => __('Search FAQs', 'inskynepal'),
            'parent_item_colon' => __('Parent FAQ:', 'inskynepal'),
            'not_found' => __('No FAQs Found', 'inskynepal'),
            'not_found_in_trash' => __('No FAQs Found in Trash', 'inskynepal')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'inskynepal'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'faq' ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 9,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            'taxonomies' => array( 'category' ),
    
        );

        register_post_type('faq', $args);

    }
    add_action('init', 'inskynepal_custom_post_faq');


    function inskynepal_custom_post_things_to_do(){
        $labels = array(
            'name' => _x( 'Things To Do', 'inskynepal'),
            'singular_name' => _x( 'Things To Do', 'post type singular name', 'inskynepal'),
            'menu_name' => _x('Things To Do', 'admin menu', 'inskynepal'),
            'name_admin_bar' => _x('Things To Do', 'add new on admin bar', 'inskynepal'),
            'add_new' => _x('Add New Things To Do', 'book', 'inskynepal'),
            'add_new_item' => __('Add Things To Do', 'inskynepal'),
            'new_item' => __('New Things To Do', 'inskynepal'),
            'edit_item' => __('Edit Things To Do', 'inskynepal'),
            'view_item' => __('View Things To Do', 'inskynepal'),
            'all_items' => __('All Things To Do', 'inskynepal'),
            'search_items' => __('Search Things To Do', 'inskynepal'),
            'parent_item_colon' => __('Parent Things To Do:', 'inskynepal'),
            'not_found' => __('No Things To Do Found', 'inskynepal'),
            'not_found_in_trash' => __('No Things To Do Found in Trash', 'inskynepal')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'inskynepal'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'things_to_do' ),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 10,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            //'taxonomies' => array( 'category'),
    
        );

        register_post_type('things-to-do', $args);

    }
    add_action('init', 'inskynepal_custom_post_things_to_do');
?>