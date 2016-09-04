<?php
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_section-blocks',
        'title' => 'Section Blocks',
        'fields' => array(
            array(
                'key' => 'section_blocks',
                'label' => 'Section Block',
                'name' => 'section_blocks',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'section_block_height',
                        'label' => 'Section Block Height',
                        'name' => 'section_block_height',
                        'type' => 'text',
                        'default_value' => 'auto'
                    ),
                    array(
                        'key' => 'section_block_padding_top',
                        'label' => 'Section Block Padding Top',
                        'name' => 'section_block_padding_top',
                        'type' => 'text',
                        'default_value' => '0'
                    ),
                    array(
                        'key' => 'section_block_padding_bottom',
                        'label' => 'Section Block Padding Bottom',
                        'name' => 'section_block_padding_bottom',
                        'type' => 'text',
                        'default_value' => '0'
                    ),
                    array(
                        'key' => 'section_block_background',
                        'label' => 'Section Block Background Image',
                        'name' => 'section_block_background_image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all'
                    ),
                    array(
                        'key' => 'section_block_background_color',
                        'label' => 'Section Block Background Color',
                        'name' => 'section_block_background_color',
                        'type' => 'color_picker',
                        'column_width' => '',
                        'default_value' => '#fffff'
                    ),
                    array(
                        'key' => 'section_block_grid_type',
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
                        'key' => 'content_block',
                        'label' => 'Content Block',
                        'name' => 'content_block',
                        'type' => 'repeater',
                        'column_width' => '',
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'content_block_title_image',
                                'label' => 'Block Title Image',
                                'name' => 'block_title_image',
                                'type' => 'image',
                                'column_width' => '',
                                'save_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all'
                            ),
                            array(
                                'key' => 'content_block_title_text',
                                'label' => 'Block Title Text',
                                'name' => 'block_title_text',
                                'type' => 'text',
                                'formatting' => 'html',
                                'maxlength' => ''
                            ),
                            array(
                                'key' => 'content_block_image_background',
                                'label' => 'Block Background Image',
                                'name' => 'block_image',
                                'type' => 'image',
                                'column_width' => '',
                                'save_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all'
                            ),
                            array(
                                'key' => 'content_block_layout',
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
                                'key' => 'content_block_background_color',
                                'label' => 'Block Background',
                                'name' => 'block_background',
                                'type' => 'color_picker',
                                'column_width' => '',
                                'default_value' => '#fffff'
                            ),
                            array(
                                'key' => 'content_block_animation',
                                'label' => 'Block Animation',
                                'name' => 'content_block_animation',
                                'type' => 'text',
                                'default_value' => ''
                            ),
                            array(
                                'key' => 'content_block_content_type',
                                'label' => 'Block Content Type',
                                'name' => 'block_content_type',
                                'type' => 'select',
                                'choices' => array(
                                    'latest-posts' => 'Latest Posts',
                                    'repeatable-blocks' => 'Repeatable Blocks',
                                    'text' => 'Text'
                                ),
                                'default_value' => 'text'
                            ),
                            array(
                                'key' => 'latest_posts_slug',
                                'label' => 'Post Slug',
                                'name' => 'latest_posts_slug',
                                'type' => 'text',
                                'default_value' => "post",
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'latest-posts'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'latest_posts_order',
                                'label' => 'Latest Posts Order',
                                'name' => 'latest_posts_order',
                                'type' => 'select',
                                'choices' => array(
                                    'ASC' => 'Ascending',
                                    'DESC' => 'Descending'
                                ),
                                'default_value' => 'DESC',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'latest-posts'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'latest_posts_count',
                                'label' => 'Post Count Limit',
                                'name' => 'latest_posts_count',
                                'type' => 'text',
                                'default_value' => "6",
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'latest-posts'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'repeatable_block_large_row_count',
                                'label' => 'Repeatable blocks per row on a large screen',
                                'name' => 'repeatable_block_large_row_count',
                                'type' => 'text',
                                'default_value' => '4',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'repeatable-blocks'
                                        )
                                    ),
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'latest-posts'
                                        )
                                    )
                                )
                            ),

                            array(
                                'key' => 'repeatable_block_medium_row_count',
                                'label' => 'Repeatable blocks per row on a medium screen',
                                'name' => 'repeatable_block_medium_row_count',
                                'type' => 'text',
                                'default_value' => '2',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'repeatable-blocks'
                                        )
                                    ),
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'latest-posts'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'repeatable_block_small_row_count',
                                'label' => 'Repeatable blocks per row on a small screen',
                                'name' => 'repeatable_block_small_row_count',
                                'type' => 'text',
                                'default_value' => '1',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'repeatable-blocks'
                                        )
                                    ),
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'latest-posts'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'content_block_content',
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
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'text'
                                        )
                                    )
                                )
                            ),
                            array(
                                'key' => 'content_block_repeatable_blocks',
                                'label' => 'Repeatable Blocks',
                                'name' => 'repeatable_blocks',
                                'type' => 'repeater',
                                'layout' => 'row',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'repeatable_hover_block_type',
                                        'label' => 'Repeatable Block Type',
                                        'name' => 'repeatable_hover_block_type',
                                        'type' => 'select',
                                        'toolbar' => 'full',
                                        'choices' => array(
                                            'simple' => 'Simple Content Block',
                                            'post-hover' => 'Post Hover Block',
                                            'simple-hover' => 'Simple Hover Block'
                                        )
                                    ),
                                    array(
                                        'key' => 'repeatable_block_title',
                                        'label' => 'Block Title',
                                        'name' => 'repeatable_block_title',
                                        'type' => 'wysiwyg',
                                        'column_width' => '',
                                        'default_value' => '',
                                        'toolbar' => 'full',
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'repeatable_hover_block_type',
                                                    'operator' => '==',
                                                    'value' => 'simple-hover'
                                                ),
                                            ),
                                            array(
                                                array(
                                                    'field' => 'repeatable_hover_block_type',
                                                    'operator' => '==',
                                                    'value' => 'simple-hover'
                                                )
                                            )
                                        )
                                    ),
                                    array(
                                        'key' => 'repeatable_block_content',
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
                                                    'field' => 'repeatable_hover_block_type',
                                                    'operator' => '==',
                                                    'value' => 'simple'
                                                ),
                                            ),
                                            array(
                                                array(
                                                    'field' => 'repeatable_hover_block_type',
                                                    'operator' => '==',
                                                    'value' => 'simple-hover'
                                                )
                                            )
                                        )
                                    ),
                                    array(
                                        'key' => 'repeatable_block_animation',
                                        'label' => 'Repeatable Block Animation',
                                        'name' => 'repeatable_block_animation',
                                        'type' => 'text',
                                        'default_value' => 'fadeInUp'
                                    ),
                                    array(
                                        'key' => 'repeatable_block_background_image',
                                        'label' => 'Post Block Background',
                                        'name' => 'repeatable_block_background_image',
                                        'type' => 'image',
                                        'save_format' => 'url',
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'repeatable_hover_block_type',
                                                    'operator' => '==',
                                                    'value' => 'simple-hover'
                                                )
                                            )
                                        )
                                    ),
                                    array(
                                        'key' => 'repeatable_block_post_id',
                                        'label' => 'Post ID',
                                        'name' => 'repeatable_block_post_id',
                                        'type' => 'post_object',
                                        'save_format' => 'id',
                                        'conditional_logic' => array(
                                            array(
                                                array(
                                                    'field' => 'repeatable_hover_block_type',
                                                    'operator' => '==',
                                                    'value' => 'post-hover'
                                                )
                                            )
                                        )
                                    ),
                                ),
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'content_block_content_type',
                                            'operator' => '==',
                                            'value' => 'repeatable-blocks'
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