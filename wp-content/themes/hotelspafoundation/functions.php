<?php

function hotelspa_styles() {
    wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', '1.0.0');
    wp_enqueue_style('foundation-icons', get_template_directory_uri() . '/css/foundation-icons.css', '1.0.0');

    wp_enqueue_script('jquery');
    wp_enqueue_script('what-input', get_template_directory_uri() . '/bower_components/what-input/what-input.js', array('jquery'), '6.2.2', true);
    wp_enqueue_script('foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js', array('jquery'), '6.2.2', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'hotelspa_styles');

add_theme_support('post-thumbnails');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );