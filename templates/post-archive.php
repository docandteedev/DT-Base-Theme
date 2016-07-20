<?php
global $query;
global  $filter_taxonomies;
?>

<?php if ( $query->have_posts() ) : ?>

<div class="content">
    <div class="post-archive-<?php echo get_field('archive_filter_type') == "Term Checkboxes" ? 'with-sidebar' : 'without-sidebar'; ?>">
      <div class="isotope-grid isotope" id="the-isotope"  data-itemselector=".post-block" <?php echo ( empty( $filter_taxonomies ) ) ? '' : ' data-filters="li.tax-filters  .tax-filter" data-filter-type="' . get_field("archive_filter_type") . '" data-filters-reset="li.tax-filters #filter-reset"'; ?> >
          <!-- the loop -->
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <?php get_template_part("templates/partials/post-block"); ?>
          <?php endwhile; ?>
          <!-- end of the loop -->
      </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php _e( 'Sorry, we coudn\'t find any posts' ); ?></p>
<?php endif; ?>
