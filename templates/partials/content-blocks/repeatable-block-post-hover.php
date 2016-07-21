<?php 
$query = new WP_Query(array(  
    'post_type' => 'any',  
    'p' => $repeatable_block[repeatable_block_post_id]->ID
)); ?>

<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
    <?php
        $thumb_id = get_post_thumbnail_id($post->ID);
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0]; 
    ?>
    <div class="columns hover-block" data-interchange="[<?php echo $thumb_url; ?>, small],[<?php echo $thumb_url; ?>, default]">
        <div class="hover-block-inner">
            <h5 class="hover-block-title"><?php the_title(); ?></h5>
            <?php $terms = get_the_terms($post->ID, 'category'); ?>
            <ul class="hover-block-term-list">
                <?php foreach($terms as $term): ?>
                    <?php echo '<li class="hover-block-term-list-item"> <a class="hover-block-term-list-link" href="/' . $term->slug . '">' . $term->name . ';</a></li>'; ?>
                <?php endforeach; ?>
            </ul>
            <a class="hover-block-link" href="<?php the_permalink(); ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a>
        </div>
    </div>
<?php endwhile; endif; ?>    
