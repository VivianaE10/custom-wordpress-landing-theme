<?php

function cargar_estilos_theme() {

    wp_enqueue_style(
        'estilos-theme',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    wp_enqueue_script(
        'animations',
        get_stylesheet_directory_uri() . '/assets/js/animations.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/animations.js'),
        false
    );
}

// function configuracion_theme() {

//     add_theme_support('custom-logo');

//     register_nav_menus(array(
//         'menu_principal' => 'Menu Principal',
//     ));s
// }

// add_action('after_setup_theme', 'configuracion_theme');
add_action('wp_enqueue_scripts', 'cargar_estilos_theme');