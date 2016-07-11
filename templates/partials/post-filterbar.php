<?php
global $post_type;
global $filter_taxonomies;

if ( !empty( $filter_taxonomies ) ) : ?>
    <div class="content">
        <div class="top-bar filterbar">
            
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text">Filter:</li>
                </ul>
            </div>
        
            <div class="top-bar-right">
                <div class="tax-filters">
                    <?php foreach($filter_taxonomies as $tax): 
                                    $tax = get_taxonomy( trim( $tax ) );
                                    if ( false === $tax ) { continue; } ?>
                     
                        <label>
                            <span class="filter-title"><?php
                                $title = get_field( 'archive_filter_box_title' );
                                echo ( empty( $title ) ) ? 'Filter posts...' : $title;
                                unset( $title ); ?>
                            </span>
                                <select id="filter-<?php echo $tax->name; ?>" name="filter-<?php echo $tax->name; ?>" class="filter-dropdown" data-tax="<?php echo $tax->name; ?>">
                                <option value="...">Please select...</option>
                                <?php $terms = get_terms( $tax->name, array(  ) );
                                foreach( $terms as $term ) :
                                    echo '<option value="' . $term->slug  . '">' . $term->name . '</option>';
                                endforeach; ?>		
                        </select>
                        </label>

                    <?php endforeach; ?>
                    <div class="filter-buttons">
                        <input id="filter-reset" class="button" type="button" value="Reset All"> 
                    </div>
                   
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>