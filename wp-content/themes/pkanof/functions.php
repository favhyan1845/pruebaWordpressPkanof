<?php
// Activar soporte para títulos dinámicos
add_theme_support('title-tag');

// Activar soporte para imágenes destacadas
add_theme_support('post-thumbnails');

// Registrar menú
function registrar_menu_principal()
{
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'pkanof'),
    ));
}
add_action('after_setup_theme', 'registrar_menu_principal');

// Registrar el sidebar
function pkanof_widgets_init()
{
    register_sidebar(array(
        'name' => __('Barra Lateral', 'pkanof'),
        'id' => 'sidebar-1',
        'description' => __('Widgets en la barra lateral', 'pkanof'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'pkanof_widgets_init');