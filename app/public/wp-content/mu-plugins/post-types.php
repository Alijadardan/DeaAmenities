<?php 

function postTypes(){
    register_post_type('services' , array(
        
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'

        ),
        'menu_icon' => 'dashicons-admin-tools'
    ));
    register_post_type('products' , array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'products'
    ),
    'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product'

        ),
        'menu_icon' => 'dashicons-admin-tools'
    ));
    register_post_type('category' , array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'categories'
    ),
    'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Categories',
            'add_new_item' => 'Add New Category',
            'edit_item' => 'Edit Category',
            'all_items' => 'All Categories',
            'singular_name' => 'Category'

        ),
        'menu_icon' => 'dashicons-admin-tools'
    ));
}



add_action('init', 'postTypes');