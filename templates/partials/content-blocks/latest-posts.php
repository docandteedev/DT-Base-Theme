<?php
$query = new WP_Query(array(
    'post_type' => $block[latest_posts_slug],
    'posts_per_page' => -1
));
?>

<div class="latest-posts-content-block">
    <?php if (!empty($block[block_title_text])) : ?>
        <h2 class="content-block-title entry-title-centered"><?php echo $block[block_title_text]; ?></h2>
    <?php elseif (!empty($block[block_title_image])) : ?>
        <img class="content-block-img-title" src="<?php echo $block[block_title_image]; ?>" alt="title-img">
    <?php endif; ?>
    <div class="row small-up-1 medium-up-3 centered">
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
            <div class="column">
                <?php get_template_part('templates/partials/post-excerpt-block'); ?>
            </div>
        <?php wp_reset_postdata(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>