<?php
use Roots\Sage\Titles;
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>


<?php if (get_field('only_show_title')) : ?>
<div class="content">
  <div class="page-simple-header">
    <h1 class="entry-title"><?= Titles\title(); ?></h1>
  </div>
  </div>
<?php endif; ?>

<?php $hssc = get_field( 'header_slider_shortcode' ); if (!empty($hssc)) : ?>
	<div class="slider-header">
		<?php echo do_shortcode( $hssc ); ?>
	</div>
<?php elseif (get_field('show_header')) : ?>
    <?php if (!empty(get_field('slide'))) : ?>
    <?php get_template_part('templates/content-single-slider'); ?>
<?php elseif (has_post_thumbnail()) : ?>
  <header class="page-header lazy" data-original="<?php echo $thumb_url; ?>">
      <div class="page-header-inner">
<<<<<<< HEAD
          <h1 class="entry-title"><?= Titles\title(); ?></h1>    
=======
          <h1 class="entry-title fadeInUp"><?= Titles\title(); ?></h1>
            <?php if (!is_page()) : ?>
            <div class="meta">
                <?php get_template_part('templates/entry-meta'); ?>
            </div>
            <?php endif; ?>
>>>>>>> c3a5c39cc875b2388c172fd6a9bb2cec0cf559d8
      </div>
      <div class="page-header-background"></div>
  </header>
<?php else : ?>
<div class="content">
  <div class="page-simple-header">
    <h1 class="entry-title"><?= Titles\title(); ?></h1>
  </div>
  </div>
            <?php endif; ?>
<<<<<<< HEAD
            
            
=======
>>>>>>> c3a5c39cc875b2388c172fd6a9bb2cec0cf559d8
<?php endif; ?>
