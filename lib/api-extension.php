<?php
//Get image URL
function get_thumbnail_url($post){
    if(has_post_thumbnail($post['id'])){
        $imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post['id'] ), 'full' ); // replace 'full' with 'thumbnail' to get a thumbnail
        $imgURL = $imgArray[0];
        return $imgURL;
    } else {
        return false;
    }
}
//integrate with WP-REST-API
function insert_thumbnail_url() {
     register_rest_field( 'post',
                          'featured_image',  //key-name in json response
                           array(
                             'get_callback'    => 'get_thumbnail_url',
                             'update_callback' => null,
                             'schema'          => null,
                             )
                         );
     }
//register action
add_action( 'rest_api_init', __namespace__ . '\insert_thumbnail_url' );
