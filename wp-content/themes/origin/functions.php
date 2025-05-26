<?php 

// Add  feed links to <head>
add_theme_support('automatic-feed-links');

// Load jQuery and custom scripts
function theme_enqueue_scripts() {
    // Deregister default jQuery and register a custom one
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js', [], null, true);
    wp_enqueue_script('jquery');

    // Main navigation JS
    wp_register_script('main-nav', get_template_directory_uri() . '/js/main-nav.js', [], null, true);
    wp_enqueue_script('main-nav');

    // Tab navigation JS
    wp_deregister_script('tab-nav');
    wp_register_script('tab-nav', get_template_directory_uri() . '/js/tab-nav.js', [], null, true);
    wp_enqueue_script('tab-nav');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Clean up the <head>
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'description' => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'right-sidebar',
        'description' => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

// Create menu support for theme
if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Main Navigation Menu'
    ));
}

// Add thumbnail support
add_theme_support('post-thumbnails');
