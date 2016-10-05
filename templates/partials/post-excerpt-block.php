<div class="post-excerpt-block">
    
        <div class="post-excerpt-block-image">
        <a href="<?php the_permalink(); ?>" class="post-excerpt-block-link">
            <?php the_post_thumbnail(); ?>
            </a>
        </div>
        <h3 class="post-excerpt-block-title"><a href="<?php the_permalink(); ?>" class="post-excerpt-block-link"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <hr />
        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
    </a>
</div>