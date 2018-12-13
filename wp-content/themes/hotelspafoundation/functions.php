<?php

function hotelspa_styles() {
    wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', '1.0.0');
    wp_enqueue_style('foundation-icons', get_template_directory_uri() . '/css/foundation-icons.css', '1.0.0');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/app.js');
}

add_action('wp_enqueue_scripts', 'hotelspa_styles');