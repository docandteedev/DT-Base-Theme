  <div class="top-bar large-nav-bar" id="top-menu" >
<<<<<<< HEAD
    <div class="top-bar-inner row">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="home">
                    <?php echo the_custom_logo(); ?>
                    <?php if (!has_custom_logo()) : ?>
                        <h1><?php bloginfo('name'); ?></h1>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <div class="top-bar-center">
            <ul class="dropdown menu top-bar-nav" data-dropdown-menu>
                <?php if (has_nav_menu('primary_navigation')) :?>
                    <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
                <?php endif;?>
            </ul>
        </div>
        <div class="top-bar-right">
            <?php get_template_part('templates/partials/social-links'); ?>
        </div>
    </div>
=======
      <div class="large-nav-bar-container">
          <div class="top-bar-left">
              <ul class="menu">
                  <li class="home">
                      <?php echo the_custom_logo(); ?>
                      <?php if (!has_custom_logo()) : ?>
                          <h1><?php bloginfo('name'); ?></h1>
                      <?php endif; ?>
                  </li>
              </ul>
          </div>
          <div class="top-bar-center">
              <ul class="dropdown menu top-bar-nav" data-dropdown-menu>
                  <?php if (has_nav_menu('primary_navigation')) :?>
                      <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
                  <?php endif;?>
              </ul>
          </div>
          <div class="top-bar-right">
              <?php get_template_part('templates/partials/social-links'); ?>
          </div>
      </div>
>>>>>>> c3a5c39cc875b2388c172fd6a9bb2cec0cf559d8
  </div>

