<?php

add_action('admin_head', 'add_custom_tinymce_button');
function add_custom_tinymce_button() {
	global $typenow;
	
    // 	check user permissions
	if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
		return;
	}
	
    // 	verify the post type
	if( ! in_array( $typenow, array( 'post', 'page' ) ) )
	return;
	
    // 	check if WYSIWYG is enabled
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "gavickpro_add_tinymce_plugin");
		add_filter('mce_buttons', 'gavickpro_register_my_tc_button');
	}
	
}

function gavickpro_add_tinymce_plugin($plugin_array) {
    $plugin_array['testimonial_attach_button'] = 'http://wegetcreative.co.uk/wholepartnership/wp-content/themes/wholepartnership2016/assets/scripts/custom-editor-button.js';
    return $plugin_array;
}

function gavickpro_register_my_tc_button($buttons) {
    array_push($buttons, "testimonial_attach_button");
    return $buttons;
}