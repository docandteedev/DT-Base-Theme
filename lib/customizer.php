<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;
use WP_Customize_Upload_Control;

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

/**
* Add thread_comments Config
*/
function theme_customize_register($wp_customize)
{

  $wp_customize->add_section(
    'theme_section',
    array(
    'title' => 'Theme Settings',
    'description' => 'Edit the Theme types.',
    'priority' => 55,
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
      'section' => 'theme_section',
      'type' => 'select',
      'choices' => array(
        'inline' => 'Inline',
        'layered' => 'Layered',
        'layered--centered' => 'Layered but Centered',
        'logo-center' => 'Layered with logo in center',
      )
    )
  );

}

add_action('customize_register', __NAMESPACE__ . '\\theme_customize_register');

/**
* Add Landing Page Config
*/
function landing_customize_register($wp_customize)
{

  $wp_customize->add_section(
    'landing_section',
    array(
    'title' => 'Landing Page options',
    'description' => 'Edit the Landing page options.',
    'priority' => 55,
    )
  );

  $wp_customize->add_setting(
    'landing_background',
    array(
      'type' => 'option',
    )
  );

 $wp_customize->add_control(
    new WP_Customize_Upload_Control(
    $wp_customize,
    'landing_background',
    array(
      'label'      => 'Landing background',
      'section'    => 'landing_section',
      'settings'   => 'landing_background'
    ) )
  );

}

add_action('customize_register', __NAMESPACE__ . '\\landing_customize_register');

// Register Menus
function register_my_menu() {
  register_nav_menu('topnav_menu',__( 'TopBar Menu' ));
  register_nav_menu('right_menu',__( 'Right Menu (Centered Nav Layout Only)' ));
  register_nav_menu('left_menu',__( 'Left Menu (Centered Nav Layout Only)' ));
}
add_action( 'init', __NAMESPACE__ . '\\register_my_menu' );

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
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
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
    if(get_field('full_width_container')) {
      return 'fullwidth-row';
    } else {
      return 'row';
    }
  }