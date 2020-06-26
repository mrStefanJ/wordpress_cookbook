<?php

//Load stylesheet
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri().'/css/main.css',
        array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('home', get_template_directory_uri().'/css/home.css',
        array(), false, 'all');
    wp_enqueue_style('home');

    wp_register_style('blog', get_template_directory_uri().'/css/blog.css',
        array(), false, 'all');
    wp_enqueue_style('blog');

    wp_register_style('contact', get_template_directory_uri().'/css/contact.css',
        array(), false, 'all');
    wp_enqueue_style('contact');

    wp_register_style('recipes', get_template_directory_uri().'/css/recipes.css',
        array(), false, 'all');
    wp_enqueue_style('recipes');

    wp_register_style('latestrecipes', get_template_directory_uri().'/css/latestrecipes.css',
        array(), false, 'all');
    wp_enqueue_style('latestrecipes');

   
}
add_action('wp_enqueue_scripts','load_css');

//Load JavaScript
function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
    
    add_action('wp_enqueue_scripts','jquery');
}
add_action('wp_enqueue_scripts','include_jquery');

//Theme Options
add_theme_support( 'menus' );

//Menus
register_nav_menus (

    array(
        'top-menu' => __('Top Menu', 'theme'),
        
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

//Recipes Custom Post Type

function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Recipes', 'Post Type General Name', 'cookbooktheme' ),
            'singular_name'       => _x( 'Recipes', 'Post Type Singular Name', 'cookbooktheme' ),
            'menu_name'           => __( 'Recipes', 'cookbooktheme' ),
            'parent_item_colon'   => __( 'Parent Recipes', 'cookbooktheme' ),
            'all_items'           => __( 'All Recipes', 'cookbooktheme' ),
            'view_item'           => __( 'View Recipes', 'cookbooktheme' ),
            'add_new_item'        => __( 'Add New Recipes', 'cookbooktheme' ),
            'add_new'             => __( 'Add New', 'cookbooktheme' ),
            'edit_item'           => __( 'Edit Recipes', 'cookbooktheme' ),
            'update_item'         => __( 'Update Recipes', 'cookbooktheme' ),
            'search_items'        => __( 'Search Recipes', 'cookbooktheme' ),
            'not_found'           => __( 'Not Found', 'cookbooktheme' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'cookbooktheme' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'recipes', 'cookbooktheme' ),
            'description'         => __( 'Movie news and reviews', 'cookbooktheme' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'recipes', $args );
        
        register_taxonomy('recipes_category', 'recipes', array('hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => array( 'slug' => 'recipes_category' )));
    }
add_action( 'init', 'custom_post_type', 0 );