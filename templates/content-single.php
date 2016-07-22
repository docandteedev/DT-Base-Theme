<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  
    <header class="page-header" style="background: url(<?php echo $thumb_url; ?>)">
      <div class="page-header-inner">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="meta">
            <?php get_template_part('templates/entry-meta'); ?>
        </div>
      </div>
    </header>
   
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
   
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>

  </article>
<?php endwhile; ?>