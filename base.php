<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
    if (Extras\display_header()) {
        do_action('get_header');
        get_template_part('templates/header');
    }
    ?>
    <div class="wrap container <?php echo get_post_type() . '-container' ?>" role="document">
        <main class="main <?php echo (get_field(full_width_container)) ? "fullwidth" : "" ; ?>">
            <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (get_field('show_sidebar')) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>

  </body>
</html>
