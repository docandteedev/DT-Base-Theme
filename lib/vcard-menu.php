<?php

/*  VCARD settings menu (for API key's etc...) */
function vcardSettingsRegister($wp_customize)
{
    $wp_customize->add_section(
        'vcard_section',
        array(
            'title' => 'Vcard Settings',
            'description' => 'Edit the vcard setings.',
            'priority' => 3,
        )
    );

    $wp_customize->add_setting(
        'phone_number',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'phone_number',
        array(
            'label' => 'Phone Number',
            'section' => 'vcard_section',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'fax_number',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'fax_number',
        array(
            'label' => 'Fax Number',
            'section' => 'vcard_section',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'mobile_number',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'mobile_number',
        array(
            'label' => 'Mobile Number',
            'section' => 'vcard_section',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'email',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'email',
        array(
            'label' => 'Email',
            'section' => 'vcard_section',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'address',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'address',
        array(
            'label' => 'Address',
            'section' => 'vcard_section',
            'type' => 'textarea'
        )
    );


    $wp_customize->add_setting(
        'location_longitude',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'location_longitude',
        array(
            'label' => 'Longitude Location of Company',
            'section' => 'vcard_section',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'location_latitude',
        array(
            'type' => 'option',
        )
    );

    $wp_customize->add_control(
        'location_latitude',
        array(
            'label' => 'Latitude Location of Company',
            'section' => 'vcard_section',
            'type' => 'text'
        )
    );

}
add_action('customize_register', __NAMESPACE__ . '\\vcardSettingsRegister');
