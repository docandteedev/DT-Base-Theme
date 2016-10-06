<div class="top-bar large-nav-bar large-nav-bar--logo-centered" id="top-menu">
  <div class="top-bar-inner row">
    <div class="top-bar-left">
      <ul class="dropdown menu top-bar-nav" data-dropdown-menu>
        <?php if (has_nav_menu('left_menu')) :?>
            <?php wp_nav_menu(['theme_location' => 'left_menu', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
        <?php endif;?>
      </ul>
    </div>

    <div class="top-bar-center">
        <ul class="menu">
          <li class="home">
                <?php echo the_custom_logo(); ?>
                <?php if (!has_custom_logo()) : ?>
                <h1><?php bloginfo('name'); ?></h1>
                <?php endif; ?>
          </li>
        </ul>
    </div>

    <div class="top-bar-right">
      <ul class="dropdown menu top-bar-nav" data-dropdown-menu>
        <?php if (has_nav_menu('right_menu')) :?>
            <?php wp_nav_menu(['theme_location' => 'right_menu', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
        <?php endif;?>
      </ul>
    </div>

  </div>
</div>

<div class="top-bar large-nav-bar large-nav-bar--logo-centered-lower">
  <div class="top-bar-center">
    <?php get_template_part('templates/partials/social-links'); ?>
  </div>
</div>
