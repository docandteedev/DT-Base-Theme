<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
    wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');


// Register Menus
function register_my_menu() {
    register_nav_menu('topnav_menu', __('TopBar Menu'));
    register_nav_menu('right_menu', __('Right Menu (Centered Nav Layout Only)'));
    register_nav_menu('left_menu', __('Left Menu (Centered Nav Layout Only)'));
}
add_action('init', __NAMESPACE__ . '\\register_my_menu');

// Breadcrumb function
function the_breadcrumb() {
        echo '<nav aria-label="You are here:" role="navigation">';
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo "</a></li>";
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo "</li><li>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
        }
    } elseif (is_tag()) {single_tag_title();} elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';} elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';} elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';} elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';} elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
    echo '</nav>';
}

// Custom Logo
add_image_size('mytheme-logo', 75, 55);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));

// Row Type
function get_row_type() {
    if (get_field('full_width_container')) {
        return 'fullwidth-row';
    } else {
        return 'row';
    }
}
