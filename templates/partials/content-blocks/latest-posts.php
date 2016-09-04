<?php
$query = new WP_Query(array(
    'post_type' => $block[latest_posts_slug],
    'posts_per_page' => $block[latest_posts_count],
    'order' => $block[latest_posts_order]
));
?>

<div class="latest-posts-content-block">
    <?php if (!empty($block[block_title_text])) : ?>
        <h2 class="content-block-title"><?php echo $block[block_title_text]; ?></h2>
    <?php elseif (!empty($block[block_title_image])) : ?>
        <img class="content-block-img-title" src="<?php echo $block[block_title_image]; ?>" alt="title-img">
    <?php endif; ?>
    <div
        class="row small-up-<?php echo $block['repeatable_block_small_row_count']; ?> medium-up-<?php echo $block['repeatable_block_medium_row_count']; ?> large-up-<?php echo $block['repeatable_block_large_row_count']; ?>">
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="column">
                <?php if (locate_template('templates/partials/post-block-' . $block[latest_posts_slug] . '.php') != ''): ?>
                    <?php get_template_part('templates/partials/post-block', $block[latest_posts_slug]); ?>
                <?php else : ?>
                    <div class="hover-block wow fadeInUp">
                        <div class="hover-block-title">
                            <img src="<?php echo the_post_thumbnail_url($post->ID); ?>" class="hover-block-image"/>
                            <h4 class="entry-title"><?php the_title(); ?></h4>
                        </div>
                        <div class="hover-block-inner">
                            <div class="hover-block-content">
                                <h4 class="entry-title"><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>