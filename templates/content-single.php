<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
<<<<<<< HEAD
  
    <?php get_template_part('templates/page-header'); ?>
   
    <div class="row content">
      <div class="entry-content">
        <?php the_content(); ?>
=======

    <?php get_template_part('templates/page-header'); ?>

    <div class="entry-content">
      <?php the_content(); ?>
>>>>>>> c3a5c39cc875b2388c172fd6a9bb2cec0cf559d8
    </div>

    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    </div>

  </article>
<?php endwhile; ?>
