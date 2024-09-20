<!-- sidebar.php -->
<aside class="site-sidebar">
    <h3>Barra Lateral</h3>
    <?php if (is_active_sidebar('sidebar-1')): ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php endif; ?>
</aside>