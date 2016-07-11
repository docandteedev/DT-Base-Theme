<?php 
use \Roots\Sage\Titles;
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

global $filter_taxonomies;
if ( !empty( $filter_taxonomies ) ) {
	foreach( $filter_taxonomies as $tax ) {
		$terms = get_the_terms( $id, $tax );
		if ( !empty( $terms ) ) {
			foreach( $terms as $term ) {
				$extra_classes[] = $tax . '-' . $term->slug;
			}
		}
		unset( $terms );
	}
}

?>

<div class="post-block post-block--<?php  echo get_post_type(); ?> lazy wow fadeInUp <?php echo ( empty( $extra_classes ) ) ? '' : ' ' . implode( ' ', $extra_classes ); ?> " data-original="<?php echo $thumb_url; ?>" data-wow-duration="2s">
    <a class="post-block-inner" href="<?php the_permalink() ?>">
        <h3 class="post-title"><?= Titles\title(); ?></h3>
        <h6 class="post-date"><?php echo get_the_date(); ?></h6>
    </a>
</div>