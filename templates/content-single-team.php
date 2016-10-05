<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <?php get_template_part('templates/page-header'); ?>

<div class="row content team-content">

<?php if ( has_post_thumbnail() ) {
	echo '<div class="team-thumb column medium-6">';
	the_post_thumbnail('large');
	echo '</div><div class="entry-content column medium-6">';
} else {
		echo '<div class="entry-content">';
}; ?>
      
        <?php the_content(); ?>
    </div>
   
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    </div>
  </article>
<?php endwhile; ?>
