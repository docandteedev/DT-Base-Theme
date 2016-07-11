<?php
/**
 * Template Name: Post Archive
 */

global $post_type;
$post_type = 'post';
if ( function_exists( 'get_field' ) ) {
	$tmp = get_field( 'archive_post_type' );
	$post_type = ( !empty( $tmp ) ) ? $tmp : $post_type;
	unset( $tmp );
}

global $query;
$query = new WP_Query( array (
    'post_type' => $post_type,
    'orderby' => 'date',
     'posts_per_page' => -1,
    'post_status' => 'publish',
) );

?>
<div class="post-archive">
	<?php if( have_posts() ): ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/page', 'header'); ?>
			<?php get_template_part('templates/content', 'page'); ?>
			<?php get_template_part("templates/post-archive"); ?>
		<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); wp_reset_query(); ?>
</div>