<div class="off-canvas position-right off-canvas-menu position-right" id="offCanvasRight" data-off-canvas data-position="right">

  <button class="close-button" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>

  <ul class="vertical menu" data-accordion-menu><!-- start of the drilldown multi level menu -->
    <?php if (has_nav_menu('primary_navigation')) :?>
        <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
    <?php endif;?>
    <!-- <?php if (has_nav_menu('topnav_menu')) : ?>
        <?php wp_nav_menu(['theme_location' => 'topnav_menu', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
    <?php endif; ?> -->
  </ul>

</div>
