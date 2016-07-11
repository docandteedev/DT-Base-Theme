<?php

// Theme settings menu (for API key's etc...)
function settings_customize_register($wp_customize)
{

  $wp_customize->add_section(
    'settings_section',
    array(
    'title' => 'Theme Settings',
    'description' => 'Edit the theme setings.',
    'priority' => 0,
    )
  );

  $wp_customize->add_setting(
    'google_maps_api_key',
    array(
      'type' => 'option',
    )
  );

  $wp_customize->add_control(
    'google_maps_api_key',
    array(
      'label' => 'Google Maps API Key',
      'section' => 'settings_section',
      'type' => 'text'
    )
  );

}

add_action('customize_register', __NAMESPACE__ . '\\settings_customize_register');
