<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<body <?php body_class(); ?>>

    <main class="site-main overlay">
        <div class="content-wrapper">
            <div class="slider">
                <!-- Incluir la cabecera -->
                <?php get_template_part('header'); ?>
                <!-- Incluir el contenido principal -->
                <?php get_template_part('content'); ?>
            </div>

            <!-- Incluir la barra lateral -->
        </div>
    </main>

    <!-- Incluir el pie de página -->
    <?php get_template_part('footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>