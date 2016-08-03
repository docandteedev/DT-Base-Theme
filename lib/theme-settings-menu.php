<?php

/*  Theme settings menu (for API key's etc...) */
function settingsCustomizeRegister($wp_customize)
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
	
	$wp_customize->add_setting(
		'navbar_type',
		array(
			'default' => 'Inline',
			'type' => 'option',
		)
	);
	
	$wp_customize->add_control(
		'navbar_type',
		array(
			'label' => 'Navbar Type',
			'section' => 'settings_section',
			'type' => 'select',
			'choices' => array(
				'inline' => 'Inline',
				'layered' => 'Layered',
				'layered--centered' => 'Layered but Centered',
				'logo-center' => 'Layered with logo in center',
			)
		)
	);

	$wp_customize->add_setting(
		'facebook_url',
		array(
			'type' => 'option',
		)
	);
	
	$wp_customize->add_control(
		'facebook_url',
		array(
			'label' => 'Facebook Profile URL',
			'section' => 'settings_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'twitter_url',
		array(
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'twitter_url',
		array(
			'label' => 'Twitter Profile URL',
			'section' => 'settings_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'instagram_url',
		array(
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'instagram_url',
		array(
			'label' => 'Instagram Profile URL',
			'section' => 'settings_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'github_url',
		array(
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'github_url',
		array(
			'label' => 'Github Profile URL',
			'section' => 'settings_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'linkedin_url',
		array(
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'linkedin_url',
		array(
			'label' => 'LinkedIn Profile URL',
			'section' => 'settings_section',
			'type' => 'text'
		)
	);
}
add_action('customize_register', __NAMESPACE__ . '\\settingsCustomizeRegister');
