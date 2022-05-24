<?php
//IMPORTANT -> To find the main css file from the father theme, not always is style.css
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 11);
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/be.min.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_style('custom_css', get_theme_file_uri('/scss/custom.css'));
} 





