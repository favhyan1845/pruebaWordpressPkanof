<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Incluir la cabecera -->
<?php get_template_part('header'); ?>

<body <?php body_class(); ?>>

    <main class="site-main overlay">
        <header>
            <h1><?php bloginfo('name'); ?></h1>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
            </nav>
        </header>
        <!-- Incluir el contenido principal -->
        <?php get_template_part('content'); ?>
    </main>

    <!-- Incluir el pie de página -->
    <?php get_template_part('footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>