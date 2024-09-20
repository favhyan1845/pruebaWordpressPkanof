<?php
// Activar soporte para títulos dinámicos
add_theme_support('title-tag');

// Activar soporte para imágenes destacadas
add_theme_support('post-thumbnails');

// Registrar menú
function registrar_menu_principal()
{
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'mi-tema-personalizado'),
    ));
}
add_action('after_setup_theme', 'registrar_menu_principal');