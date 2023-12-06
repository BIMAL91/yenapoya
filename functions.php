<?php

function load_stylesheets() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0');
    wp_enqueue_style('bootstrap-css');

    // Your Custom CSS
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('custom-css');

    // Additional External Stylesheet (Font Awesome)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
    wp_enqueue_style('font-awesome');

    // Add any other additional stylesheets you need
    // For example:
    // wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '5.15.3');
    // wp_enqueue_style('templatemo-villa-agency-css', get_template_directory_uri() . '/assets/css/templatemo-villa-agency.css', array(), '1.0.0');
    // wp_enqueue_style('owl-css', get_template_directory_uri() . '/assets/css/owl.css', array(), '2.3.4');
    // wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), '4.1.1');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
    // jQuery Slim
    wp_enqueue_script('jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
    wp_enqueue_script('jquery-slim');

    // Popper.js
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery-slim'), '1.12.9', true);
    wp_enqueue_script('popper-js');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('popper-js'), '4.0.0', true);
    wp_enqueue_script('bootstrap-js');

    // Your Custom Scripts
    // For example:
    // wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');
add_theme_support('menus');

?>
