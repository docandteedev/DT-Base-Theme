<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <?php get_template_part('templates/page-header'); ?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>

  </article>
<?php endwhile; ?>
