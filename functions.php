<?php

/**
 * 1. 스타일시트 등록, add_action, init
 * 2. 스크립트 등록, add_action, init
 * 3. 폰트 등록
 * 4. 메뉴 등록
 * 
 */

// theme setup
function theme_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');

function register_custom_menu()
{
    register_nav_menus(
        array(
            'primary-menu'  => 'primary-menu',
        )
    );
}
add_action('init', 'register_custom_menu');

// insert StyleSheet
function register_custom_stylesheet()
{
    wp_enqueue_style('my_custom_stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'register_custom_stylesheet');

function register_custom_scripts(){
    wp_enqueue_script('custom_script', get_template_directory_uri() . '/scripts/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'register_custom_scripts');