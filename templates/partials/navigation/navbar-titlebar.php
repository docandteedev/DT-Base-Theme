 <div class="title-bar small-nav-bar" data-hide-for="medium">
                    <div class="title-bar-left">
                      <i class="fa fa-bars menubar-icon" type="button" aria-hidden="true" data-open="offCanvasLeft"></i>
                    </div>
                    <span class="title-bar-title">
                      <div class="site-logo">
                        <?php echo the_custom_logo(); ?>
                        <?php if (!has_custom_logo()): ?>
                          <h1><?php bloginfo('name'); ?></h1>
                        <?php endif; ?>
                      </div>
                    </span>
                    <div class="title-bar-right">
                      <i class="fa fa-search search-icon" type="button"  aria-hidden="true" data-open="offCanvasRight"></i>
                    </div>
                  </div>