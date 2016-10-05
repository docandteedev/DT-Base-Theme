<?php
$slider = new CPT("slider", array(
    'supports' => array(
        'title'
    )
));

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group(array(
        'key' => 'slides',
        'title' => 'Slides:',
        'name' => 'slides',
        'fields' => array(
            array(
                'key' => 'slide',
                'label' => 'Slide',
                'name' => 'slide',
                'type' => 'repeater',
                'instructions' => 'The slide in the slider',
                'required' => 1,
                'layout' => 'row',
                'button_label' => 'Add Slide',
                'sub_fields' => array(
                    array(
                        'key' => 'slide_type',
                        'label' => 'Slide Type',
                        'name' => 'slide_type',
                        'type' => 'select',
                        'required' => 1,
                        'choices' => array(
                            'post' => 'Post Slider',
                            'custom' => 'Custom Slider'
                        ),
                        'default_value' => 'custom'
                    ),
                    array(
                        'key' => 'slide_post_type',
                        'label' => 'Post Slide Post Type',
                        'name' => 'slide_post_type',
                         'conditional_logic' => array(
                            array(
                                array(
                                'field' => 'slide_type',
                                'operator' => '==',
                                'value' => 'post'
                            )
                            )
                        )
                    ),
                    array(
                        'key' => 'slide_post_attached_post',
                        'label' => 'Post Slide Attached Post',
                        'name' => 'slide_post_attached_post',
                        'type' => 'post_object',
                         'conditional_logic' => array(
                            array(
                                array(
                                'field' => 'slide_type',
                                'operator' => '==',
                                'value' => 'post'
                            )
                            )
                        )
                    ),
                    array(
                        'key' => 'slide_title',
                        'label' => 'Slide Title',
                        'name' => 'slide_title',
                        'type' => 'text',
                        'instructions' => 'The title at the top of the slide',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'slide_type',
                                    'operator' => '==',
                                    'value' => 'custom'
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => 100,
                            'class' => '',
                            'id' => ''
                        ),
                        'formatting' => 'html'
                    ),
                    array(
                        'key' => 'slide_content',
                        'label' => 'Slide Content',
                        'name' => 'slide_content',
                        'type' => 'wysiwyg',
                        'instructions' => '100',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'slide_type',
                                    'operator' => '==',
                                    'value' => 'custom'
                                )
                            )
                        ),
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1
                    ),
                    array(
                        'key' => 'slide_background',
                        'label' => 'Slide Background Type',
                        'name' => 'slide_background',
                        'type' => 'select',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => 50,
                            'class' => '',
                            'id' => ''
                        ),
                        'choices' => array(
                            'Video' => 'Video',
                            'Image' => 'Image',
                            'Colour' => 'Colour'
                        ),
                        'default_value' => array(
                            0 => 'Image'
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'ajax' => 0,
                        'placeholder' => '',
                        'disabled' => 0,
                        'readonly' => 0
                    ),
                    array(
                        'key' => 'slide_image_background',
                        'label' => 'Image Background',
                        'name' => 'image_background',
                        'type' => 'image',
                        'instructions' => 'Set the image of this slide',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'slide_background',
                                    'operator' => '==',
                                    'value' => 'Image'
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => 50,
                            'class' => '',
                            'id' => ''
                        ),
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'return_format' => 'url',
                        'min_width' => 0,
                        'min_height' => 0,
                        'min_size' => 0,
                        'max_width' => 0,
                        'max_height' => 0,
                        'max_size' => 0,
                        'mime_types' => ''
                    ),
                    array(
                        'key' => 'slide_video_background',
                        'label' => 'Video Background',
                        'name' => 'video_background',
                        'type' => 'text',
                        'instructions' => 'Paste the url of the video you want to use (Vimeo or Youtube)',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'slide_background',
                                    'operator' => '==',
                                    'value' => 'Video'
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => 50,
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0
                    ),
                    array(
                        'key' => 'slide_color_background',
                        'label' => 'Color Background',
                        'name' => 'color_background',
                        'type' => 'color_picker',
                        'instructions' => 'Pick the color you want to use as the background',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'slide_background',
                                    'operator' => '==',
                                    'value' => 'Colour'
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => 50,
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => 'black'
                    ),
                    array(
                        'key' => 'slide_buttons',
                        'label' => 'Slide Buttons',
                        'name' => 'slide_buttons',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => ''
                        ),
                        'row_min' => '',
                        'row_limit' => '',
                        'layout' => 'row',
                        'button_label' => 'Add Row',
                        'min' => 0,
                        'max' => 0,
                        'collapsed' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'slide_buttons_text',
                                'label' => 'Button Text',
                                'name' => 'button_text',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => ''
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0
                            ),
                            array(
                                'key' => 'slide_buttons_color',
                                'label' => 'Button Color',
                                'name' => 'button_color',
                                'type' => 'color_picker',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => ''
                                ),
                                'default_value' => ''
                            ),
                            array(
                                'key' => 'slide_buttons_href',
                                'label' => 'Button Destination',
                                'name' => 'button_destination',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => ''
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0
                            )
                        )
                    )
                )
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'slider'
                )
            )
        )
    ));
endif;
