<?php if (has_nav_menu('topnav_menu')) : ?>
  <div class="top-bar navbar-topnav">
      <div class="top-bar-left">
        <ul class="menu">
          <?php wp_nav_menu(['theme_location' => 'topnav_menu', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
        </ul>
      </div>

      <div class="top-bar-right">
        <?php get_search_form(); ?>
      </div>
  </div>
<?php endif; ?>
