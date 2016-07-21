<?php
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_section-blocks',
        'title' => 'Section Blocks',
        'fields' => array(
            array(
                'key' => 'field_56f3f135bd07d',
                'label' => 'Section Block',
                'name' => 'section_blocks',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_56f3f1kdckncbd07e',
                        'label' => 'Section Block Background Image',
                        'name' => 'section_block_background_image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all'
                    ),
                    array(
                        'key' => 'field_56f3f1kcnojdcnbd07e',
                        'label' => 'Section Block Background Color',
                        'name' => 'section_block_background_color',
                        'type' => 'color_picker',
                        'column_width' => '',
                        'default_value' => '#fffff'
                    ),
                    array(
                        'key' => 'field_56f3f1dendenojdcnbd07e',
                        'label' => 'Section Grid Type',
                        'name' => 'section_block_grid_type',
                        'type' => 'select',
                        'column_width' => '',
                        'choices' => array(
                            '' => 'Contained',
                            'fullwidth' => 'Fullwidth'
                        ),
                        'default_value' => 'fullwidth'
                    ),
                    array(
                        'key' => 'field_56f3fdccdo07e',
                        'label' => 'Content Block',
                        'name' => 'content_block',
                        'type' => 'repeater',
                        'column_width' => '',
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_56f3fdcbh4bd07e',
                                'label' => 'Block Title Image',
                                'name' => 'block_title_image',
                                'type' => 'image',
                                'column_width' => '',
                                'save_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all'
                            ),
                            array(
                                'key' => 'field_56f3f289bd07f',
                                'label' => 'Block Title Text',
                                'name' => 'block_title_text',
                                'type' => 'text',
                                'formatting' => 'html',
                                'maxlength' => ''
                            ),
                            array(
                                'key' => 'field_56f3f164bd07e',
                                'label' => 'Block Image',
                                'name' => 'block_image',
                                'type' => 'image',
                                'column_width' => '',
                                'save_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all'
                            ),
                            array(
                                'key' => 'field_56f3f164dcjbe',
                                'label' => 'Block Layout',
                                'name' => 'block_layout',
                                'type' => 'select',
                                'column_width' => '',
                                'default_value' => 'medium-6',
                                'choices' => array(
                                    'medium-12' => 'Full Width',
                                    'medium-6' => 'Half Width'
                                )
                            ),
                            array(
                                'key' => 'field_56f3f164dcelme',
                                'label' => 'Block Background',
                                'name' => 'block_background',
                                'type' => 'color_picker',
                                'column_width' => '',
                                'default_value' => '#fffff'
                            ),
                            array(
                                'key' => 'field_56f3f2kcndbd080',
                                'label' => 'Block Content Type',
                                'name' => 'block_content_type',
                                'type' => 'select',
                                'choices' => array(
                                    'repeatable-blocks' => 'Repeatable Blocks',
                                    'repeatable-hover-blocks' => 'Repeatable Hover Blocks',
                                    'slider' => 'Slider',
                                    'text' => 'Text'
                                ),
                                'default_value' => 'text'
                            ),
                            array(
                                'key' => 'field_56f3f29dbd080',
                                'label' => 'Block Content',
                                'name' => 'block_content',
                                'type' => 'wysiwyg',
                                'column_width' => '',
                                'default_value' => '',
                                'toolbar' => 'full',
                                'media_upload' => 'yes',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_56f3f2kcndbd080',
                                            'operator' => '==',
                                            'value' => 'text'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'field_56f3f2hfseabd080',
                                'label' => 'Repeatable Blocks',
                                'name' => 'repeatable_blocks',
                                'type' => 'repeater',
								'layout' => 'row',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_56f3f29dsknxjd080',
                                        'label' => 'Repeatable Block Type',
                                        'name' => 'repeatable_hover_block_type',
                                        'type' => 'select',
                                        'toolbar' => 'full',
                                        'choices' => array(
											'simple' => 'Simple Content Block',
                                            'post-hover' => 'Post Hover Block'
										)
                                    ),
                                    array(
                                        'key' => 'field_56f3f29jbdcjd080',
                                        'label' => 'Block Content',
                                        'name' => 'repeatable_block_content',
                                        'type' => 'wysiwyg',
                                        'column_width' => '',
                                        'default_value' => '',
                                        'toolbar' => 'full',
                                        'media_upload' => 'yes',
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'field_56f3f29dsknxjd080',
                                                    'operator' => '==',
                                                    'value' => 'simple'
                                                )
                                            )
                                        )
                                    ),
                                    array(
                                        'key' => 'field_56f3f29scksnknxjd080',
                                        'label' => 'Post ID',
                                        'name' => 'repeatable_block_post_id',
                                        'type' => 'post_object',
                                        'save_format' => 'id',
                                         'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'field_56f3f29dsknxjd080',
                                                    'operator' => '==',
                                                    'value' => 'post-hover'
                                                )
                                            )
                                        )
                                    )
                                ),
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_56f3f2kcndbd080',
                                            'operator' => '==',
                                            'value' => 'repeatable-blocks'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'field_5784befe579bd',
                                'label' => 'Slide',
                                'name' => 'slide',
                                'type' => 'repeater',
                                'instructions' => 'The slide in the slider',
                                'required' => 1,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_56f3f2kcndbd080',
                                            'operator' => '==',
                                            'value' => 'slider'
                                        )
                                    )
                                ),
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
                                        'key' => 'field_5784c014744b9',
                                        'label' => 'Slide Title',
                                        'name' => 'slide_title',
                                        'type' => 'text',
                                        'instructions' => 'The title at the top of the slide',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => 100,
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
                                        'key' => 'field_5784c03b744ba',
                                        'label' => 'Slide Content',
                                        'name' => 'slide_content',
                                        'type' => 'wysiwyg',
                                        'instructions' => '100',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => ''
                                        ),
                                        'default_value' => '',
                                        'tabs' => 'all',
                                        'toolbar' => 'full',
                                        'media_upload' => 1
                                    ),
                                    array(
                                        'key' => 'field_5784c051744bb',
                                        'label' => 'Slide Background Type',
                                        'name' => 'slide_background',
                                        'type' => 'select',
                                        'instructions' => '',
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
                                        'key' => 'field_5784c08c744bc',
                                        'label' => 'Image Background',
                                        'name' => 'image_background',
                                        'type' => 'image',
                                        'instructions' => 'Set the image of this slide',
                                        'required' => 0,
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'field_5784c051744bb',
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
                                        'key' => 'field_5784c0d5744bd',
                                        'label' => 'Video Background',
                                        'name' => 'video_background',
                                        'type' => 'text',
                                        'instructions' => 'Paste the url of the video you want to use (Vimeo or Youtube)',
                                        'required' => 1,
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'field_5784c051744bb',
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
                                        'key' => 'field_5784c10a744be',
                                        'label' => 'Color Background',
                                        'name' => 'color_background',
                                        'type' => 'color_picker',
                                        'instructions' => 'Pick the color you want to use as the background',
                                        'required' => 1,
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'field_5784c051744bb',
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
                                        'key' => 'field_5784eae5f54aa',
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
                                                'key' => 'field_5784eaf7f54ab',
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
                                                'key' => 'field_5784eb0af54ac',
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
                                                'key' => 'field_5784eb19f54ad',
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
                        )
                    )
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Row'
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'projects',
                    'order_no' => 0,
                    'group_no' => 0
                )
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-page-content-blocks.php',
                    'order_no' => 0,
                    'group_no' => 1
                )
            )
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array()
        ),
        'menu_order' => 0
    ));
}
