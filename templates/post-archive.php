<?php
global $query;
global  $filter_taxonomies;
?>

<?php if ( $query->have_posts() ) : ?>

<div class="content">
    <div class="isotope-grid isotope" id="the-isotope"  data-itemselector=".post-block" <?php echo ( empty( $filter_taxonomies ) ) ? '' : ' data-filters="div.tax-filters  select.filter-dropdown" data-filters-reset="div.tax-filters #filter-reset"'; ?> >
        <!-- the loop -->
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php get_template_part("templates/partials/post-block"); ?>
        <?php endwhile; ?>
        <!-- end of the loop -->
    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php _e( 'Sorry, we coudn\'t find any posts' ); ?></p>
<?php endif; ?>