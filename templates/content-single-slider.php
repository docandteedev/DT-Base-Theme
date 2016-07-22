<?php $slides = get_field('slide'); ?>

<div class="orbit slider" role="region" data-orbit data-use-m-u-i="false" data-auto-play="false">

  <ul class="orbit-container">

    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

    <?php foreach ($slides as $slide) : ?>
        <?php if ($slide[slide_background] == "Image") : ?>

        <li class="orbit-slide slide image-slide">
          <img class="orbit-image" src="<?php echo $slide[image_background]; ?>" alt="Space">
          <figcaption class="orbit-caption">
            <div class="caption-inner">
              <h2 class="slide-title"><?php echo $slide[slide_title]; ?></h2>
              <div class="slide-content"><?php echo $slide[slide_content]; ?></div>
            </div>
          </figcaption>
        </li>

        <?php elseif ($slide[slide_background] == "Video") : ?>

        <li class="orbit-slide slide video-bg video-slide" data-video-bg="<?php echo $slide[video_background]; ?>">
          <figcaption class="orbit-caption">
            <div class="caption-inner">
              <h2 class="slide-title"><?php echo $slide[slide_title]; ?></h2>
              <div class="slide-content"><?php echo $slide[slide_content]; ?></div>
            </div>
          </figcaption>
        </li>

        <i class="fa fa-play play-video video-control-toggle" aria-hidden="true"></i>
        <i class="fa fa-pause pause-video video-control-toggle" aria-hidden="true"></i>

        <i class="fa fa-volume-off mute-slider-toggle mute-slider-icon" aria-hidden="true"></i>
        <i class="fa fa-volume-up mute-slider-toggle unmute-slider-icon" aria-hidden="true"></i>

        <?php else : ?>

        <li class="orbit-slide slide color-slide" style="background-color: <?php echo $slide[color_background]; ?>">
          <figcaption class="orbit-caption">
            <div class="caption-inner">
              <h2 class="slide-title"><?php echo $slide[slide_title]; ?></h2>
              <div class="slide-content"><?php echo $slide[slide_content]; ?></div>
            </div>
          </figcaption>
        </li>

        <?php endif; ?>
    <?php endforeach; ?>

  </ul>
</div>
