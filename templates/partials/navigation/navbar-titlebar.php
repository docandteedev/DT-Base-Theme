 <div class="title-bar small-nav-bar" data-hide-for="medium">
                    <div class="title-bar-left">
                      <button class="fa fa-bars menubar-icon" type="button" aria-hidden="true" data-open="offCanvasLeft"></button>
                    </div>
                    <span class="title-bar-title">
                      <div class="site-logo">
                        <?php echo the_custom_logo(); ?>
                        <?php if (!has_custom_logo()) : ?>
                          <h1><?php bloginfo('name'); ?></h1>
                        <?php endif; ?>
                      </div>
                    </span>
                    <div class="title-bar-right">
                      <button class="fa fa-search search-icon" type="button"  aria-hidden="true" data-open="offCanvasRight"></button>
                    </div>
                  </div>