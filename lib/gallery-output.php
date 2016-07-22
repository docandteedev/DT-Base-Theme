<?php
/*
 * Change WordPress default gallery output
 * http://wpsites.org/?p=10510/
 */
add_filter('post_gallery', 'ct_post_gallery', 10, 2);
function ct_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby']) {
            unset($attr['orderby']); }
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) { $orderby = 'none'; }

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) { return ''; }

    // Here's your actual output, you may customize it to your need
    $output = "<div class=\"gallery\">\n";
    $output .= "<div class=\"preloader\"></div>\n";
    $output .= "<div class=\"content\">\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<div class=\"gallery-item lazy wow fadeInUp\" data-original=\"{$img[0]}\">\n";
          $output .= "<div class=\"gallery-item-inner\">\n";
              $output .= "<a href=\"#\" rel=\"gallery\" data-featherlight=\"{$img[0]}\"></a>\n";
          $output .= "</div>\n";
        $output .= "</div>\n";
    }

    $output .= "</div>\n";
    $output .= "</div>\n";

    return $output;
}
;
