      <footer class="footer">
        <div class="footer-inner">
            <?php dynamic_sidebar('sidebar-footer'); ?>

            <?php
            register_sidebar(array(
                'name' => 'Footer Sidebar 1',
                'id' => 'footer-sidebar-1',
                'description' => 'Appears in the footer area',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h5 class="widget-title">',
                'after_title' => '</h5>',
            )); ?>

        </div>
        <?php get_template_part("templates/partials/dev-accred"); ?>
      </footer>
      <div>