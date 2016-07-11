<?php
/**
 * Template Name: Post Archive with filter
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

global $filter_taxonomies;
$filter_taxonomies = array();
if ( function_exists( 'have_rows' ) && have_rows( 'archive_filter_taxonomies' ) ) {
	while ( have_rows( 'archive_filter_taxonomies' ) ) { the_row();
		if ( $tmp = get_sub_field( 'taxonomy' ) ) {
			$filter_taxonomies[] = $tmp;
		}
		unset( $tmp );
	}
}

global $filter_type;
if ( function_exists( 'get_field' ) ) {
	$tmp = get_field( 'archive_filter_type' );
	$filter_type = $tmp == 'Term Buttons' ? 'buttons' : 'selects';
	unset( $tmp );
}

global $show_map;
if ( function_exists( 'get_field' ) ) {
	$tmp = get_field( 'archive_show_map' );
	$show_map = ( !empty( $tmp ) ) ? $tmp : $show_map;
	unset( $tmp );
}

?>

<div class="post-archive">
	<?php if( have_posts() ): ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/page', 'header'); ?>
			<?php get_template_part('templates/content', 'page'); ?>
			<?php get_template_part("templates/partials/post-filterbar"); ?>
			<?php get_template_part("templates/partials/post-map"); ?>
			<?php get_template_part("templates/post-archive"); ?>
		<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); wp_reset_query(); ?>
</div>
