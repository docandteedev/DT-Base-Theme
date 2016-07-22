<?php
global $post_type;
global $filter_taxonomies;
global $show_map;

if (!empty($filter_taxonomies)) : ?>

  <div class="sidebar filterbar-side">

      <div class="sidebar-top">
          <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">Filter:</li>
          </ul>
      </div>

      <div class="sidebar-filters">
          <div class="tax-filters">
                <?php foreach ($filter_taxonomies as $tax) :
                              $tax = get_taxonomy(trim($tax));
                    if (false === $tax) { continue; } ?>

                <?php if (get_field('archive_filter_type') == 'Term Checkboxes') : ?>
                  <h4><?php echo $tax->name; ?></h4>
                    <?php $terms = get_terms($tax->name, array(  )); ?>
                    <?php foreach ($terms as $key => $term) : ?>
                    <input id="checkbox-<?php echo $key; ?>" class="tax-filter checkbox-filter" type="checkbox" data-tax="<?php echo $tax->name; ?>" value="<?php echo $term->slug; ?>"><label class="checkbox-label" for="checkbox-<?php echo $key; ?>"><?php echo $term->name; ?></label>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php endforeach; ?>

          </div>

          <div class="filter-buttons">
                <?php if ($show_map) : ?>
                <input id="toggle-map" class="button" type="button" value="Hide Map">
                <?php endif; ?>
              <input id="filter-reset" class="button" type="button" value="Reset All">
          </div>

      </div>

  </div>

<?php endif; ?>
