<?php
$testimonial = new CPT('team', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => 'true',
	'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' )
      ),
));
$testimonial->menu_icon("dashicons-admin-users");