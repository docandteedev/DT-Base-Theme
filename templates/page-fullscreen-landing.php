<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, ['1920', '1080'], true);
$thumb_url = $thumb_url_array[0];
?>
<div class="landing-page" data-interchange="[<?php echo $thumb_url; ?>, small],[<?php echo $thumb_url; ?>, default]">
  <div class="landing-page-content">
    <?php the_content(); ?>
  </div>
  <i class="fa fa-arrow-down down-icon" aria-hidden="true"></i>
</div>
<h1><hello></hello></h1>