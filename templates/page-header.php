<?php
use Roots\Sage\Titles;
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

<?php if (get_field('show_header')) : ?>
    <?php if (!empty(get_field('slide'))) : ?>
    <?php get_template_part('templates/content-single-slider'); ?>
<?php elseif (has_post_thumbnail()) : ?>
  <header class="page-header lazy" data-original="<?php echo $thumb_url; ?>">
      <div class="page-header-inner">
          <h1 class="entry-title fadeInUp"><?= Titles\title(); ?></h1>
            <?php if (!is_page()) : ?>
            <div class="meta">
                <?php get_template_part('templates/entry-meta'); ?>
            </div>
            <?php endif; ?>
      </div>
  </header>
<?php else : ?>
  <div class="page-simple-header">
    <h1 class="entry-title"><?= Titles\title(); ?></h1>
    <?php if (is_page()) : ?>
      <div class="meta">
            <?php get_template_part('templates/entry-meta'); ?>
      </div>
    <?php endif; ?>
  </div>
            <?php endif; ?>
<?php endif; ?>
