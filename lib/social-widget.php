<?php
/*
Plugin Name: Social Widget
Description: A widget that outputs the icon links of the social networks you have give set in the Social Network options page.
Author: Nathan Horrigan <Nathan_Horrigan@icloud.com>
Version: 1.0
*/

// Block direct requests
if (!defined('ABSPATH')) {
    die('-1'); }


add_action('widgets_init', function () {
     register_widget('My_Widget');
});

/**
 * Adds My_Widget widget.
 */
class My_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
        'Social_Widget', // Base ID
        __('Social Icons Widget', 'text_domain'), // Name
        array( 'description' => __('Social Icons Widget!', 'text_domain'), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {

        echo $args['before_widget'];
        if (! empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']). $args['after_title'];
        }
        get_template_part('templates/partials/social-links');
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        if (isset($instance[ 'title' ])) {
            $title = $instance[ 'title' ];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = ( ! empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class My_Widget
