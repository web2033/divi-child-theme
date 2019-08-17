<?php

add_action('wp_enqueue_scripts', 'web2033_child_theme_assets', 20);
function web2033_child_theme_assets()
{
    wp_enqueue_style('parent-theme', get_template_directory_uri().'/style.css', array(), et_get_theme_version());

    wp_dequeue_style('divi-style');

    wp_enqueue_style('child-theme', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory().'/style.css'));

    wp_enqueue_script('js', get_stylesheet_directory_uri().'/script.js', array(), filemtime(get_stylesheet_directory().'/script.js'), true);
}

/* put your custom PHP below */
