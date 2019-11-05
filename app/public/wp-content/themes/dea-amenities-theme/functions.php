<?php


function files(){
    wp_enqueue_style( 'custom-fa', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700' );
    wp_enqueue_style('anime', get_template_directory_uri().'/lib/animate/animate.min.css');
    wp_enqueue_style('fonte', get_template_directory_uri().'/lib/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('icon', get_template_directory_uri().'/lib/ionicons/css/ionicons.min.css');
    wp_enqueue_style('owlca', get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('light', get_template_directory_uri().'/lib/lightbox/css/lightbox.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.min.css');
    
    

    wp_enqueue_style('main-style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts','files');

function features(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'features');



function filess(){
    wp_enqueue_script( 'myscript', get_template_directory_uri('/js/main.js'));
    wp_enqueue_script( 'own', get_template_directory_uri('/lib/owlcarousel/owl.carousel.js'));
    wp_enqueue_script( 'jq', get_template_directory_uri('/lib/jquery/jquery.min.js'));
    wp_enqueue_script( 'jq-m', get_template_directory_uri('/lib/jquery/jquery-migrate.min.js'));
    wp_enqueue_script( 'bu', get_theme_file_uri('/lib/bootstrap/js/bootstrap.bundle.min.js'),null,'1.0',true);
    wp_enqueue_script( 'eas', get_template_directory_uri('/lib/easing/easing.min.js'));
    wp_enqueue_script( 'hover', get_template_directory_uri('/lib/superfish/hoverIntent.js'));
    wp_enqueue_script( 'super', get_template_directory_uri('/lib/superfish/superfish.min.js'));
    wp_enqueue_script( 'wow', get_template_directory_uri('/lib/wow/wow.min.js'));
    wp_enqueue_script( 'point', get_template_directory_uri('/lib/waypoints/waypoints.min.js'));
    wp_enqueue_script( 'count', get_template_directory_uri('/lib/counterup/counterup.min.js'));
    wp_enqueue_script( 'carosul', get_template_directory_uri('/lib/owlcarousel/owl.carousel.min.js'));
    wp_enqueue_script( 'isotope', get_template_directory_uri('/lib/isotope/isotope.pkgd.min.js'));
    wp_enqueue_script( 'lig', get_template_directory_uri('/lib/lightbox/js/lightbox.min.js'));
    wp_enqueue_script( 'tuche', get_template_directory_uri('/lib/touchSwipe/jquery.touchSwipe.min.js'));
    wp_enqueue_script( 'test', get_template_directory_uri('/js/test.js'));
}

add_action('wp_enqueue_scripts','filess');