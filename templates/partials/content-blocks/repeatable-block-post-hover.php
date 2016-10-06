<?php
$query = new WP_Query(array(
    'post_type' => 'any',
    'p' => $repeatable_block[repeatable_block_post_id]->ID
)); ?>

<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
<?php
$thumb_id = get_post_thumbnail_id($post->ID);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="columns hover-block <?php echo $repeatable_block[ 'repeatable_block_transition' ]; ?>">
	<div class="hover-block-link">
		<div class="hover-block-image" data-interchange="[<?php echo $thumb_url; ?>, small],[<?php echo $thumb_url; ?>, default]">
		<div class="hover-block-overlay">
			<h5 class="hover-block-title hidehover"><?php the_title(); ?></h5>
			<div class="hover-block-inner">
			<h5 class="hover-block-title"><?php the_title(); ?></h5>
			<a class="read-more-link button" href="<?php the_permalink(); ?>">Read More</a>
			</div>
		</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
