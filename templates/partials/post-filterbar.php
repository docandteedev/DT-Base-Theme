<?php
global $post_type;
global $filter_taxonomies;
global $show_map;

if (!empty($filter_taxonomies)) : ?>

  <div class="top-bar filterbar">

      <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">Filter:</li>
              <li class="tax-filters">
                  <?php foreach ($filter_taxonomies as $tax) :
                                  $tax = get_taxonomy(trim($tax));
                    if (false === $tax) { continue; } ?>

                    <?php if (get_field('archive_filter_type') == 'Tax Selects') : ?>
                      <label>
                          <span class="filter-title"><?php
                              $title = get_field('archive_filter_box_title');
                              echo ( empty($title) ) ? 'Filter posts...' : $title;
                              unset($title); ?>
                          </span>
                              <select id="filter-<?php echo $tax->name; ?>" name="filter-<?php echo $tax->name; ?>" class="filter-dropdown tax-filter select-filter" data-tax="<?php echo $tax->name; ?>">
                              <option value="...">Please select...</option>
                              <?php $terms = get_terms($tax->name, array(  ));
                              foreach ($terms as $term) :
                                  echo '<option value="' . $term->slug  . '">' . $term->name . '</option>';
                              endforeach; ?>
                      </select>
                      </label>
                    <?php else : ?>
                      <?php $terms = get_terms($tax->name, array(  )); ?>
                      <?php foreach ($terms as $term) : ?>
                        <button class="button tax-filter button-filter" value="<?php echo $term->slug; ?>" data-tax="<?php echo $tax->name; ?>"><?php echo $term->name; ?></button>
                      <?php endforeach; ?>

                    <?php endif; ?>
                  <?php endforeach; ?>

              </li>
          </ul>



      </div>

      <div class="top-bar-right">

          <div class="filter-buttons">
            <button id="filter-reset" class="button" type="button"> <i class="fa fa-wrench" aria-hidden="true"></i> Reset All</button>
            <button id="grid-view-toggle" class="button" type="button"> <i class="fa fa-th" aria-hidden="true"></i> Grid View</button>
            <button id="list-view-toggle" class="button" type="button"> <i class="fa fa-list" aria-hidden="true"></i> List View</button>
            <?php if ($show_map) : ?>
              <button id="toggle-map" class="button" type="button"> <i class="fa fa-map" aria-hidden="true"></i> Map View</button>
            <?php endif; ?>
          </div>
      </div>

  </div>

<?php endif; ?>
