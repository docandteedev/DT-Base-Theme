<?php

// Visit https://github.com/jjgrainger/wp-custom-post-type-class for the docs for this simple CPT class.

$sliders = new CPT('slider', array(
  'supports' => array('title')
));
$sliders->menu_icon('dashicons-slides');
