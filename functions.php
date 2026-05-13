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
        get_template_directory_uri() . '/assets/js/animations.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'cargar_estilos_theme');