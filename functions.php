<?php

function cargar_estilos_theme() {
    wp_enqueue_style(
        'estilos-theme',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'cargar_estilos_theme');