<?php

// theme supports
function theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption'] );
    // load_theme_textdomain('theme_name', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'theme_setup');


// theme scripts
function theme_scripts() {
    $asstDir = get_template_directory().'/assets/';
    $asstUri = get_template_directory_uri().'/assets/';
    
    $css_ver = filemtime($asstDir."css/main.css");
    $js_ver = filemtime($asstDir."js/main.js");
    $deps = ['jquery', 'wp-util'];

    wp_enqueue_style('main-style', $asstUri."css/main.css", [], $css_ver, 'all');
    wp_enqueue_script('main-script', $asstUri."js/main.js", $deps, $js_ver, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');


// autoinclude files from /inc 
$includeFiles = glob( get_template_directory().'/inc/*.php');
foreach( $includeFiles as $file){
	require_once($file);
}



