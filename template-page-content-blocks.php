<?php
/**
* Template Name: Content Blocks
*/
$section_blocks = get_field('section_blocks');
$content_blocks = get_field('content_blocks');
?>

<?php get_template_part('templates/page-header'); ?>

<div class="content-block-container">
        <?php foreach ($section_blocks as $section_block) : ?>
            <div class="section-block" data-interchange="[<?php echo $section_block[section_block_background_image]; ?>, small],[<?php echo $block[section_block_background_image]; ?>, default]" style="background-color: <?php echo $block[section_block_background_color]; ?>">
                <div class="row <?php echo $section_block[section_block_grid_type] ?>" data-equalizer data-equalize-on="medium">
                    <?php foreach ($section_block[content_block] as $block) : ?>
                        <div class="content-block small-12 columns <?php echo $block[block_layout]; ?>" data-interchange="[<?php echo $block[block_image]; ?>, small],[<?php echo $block[block_image]; ?>, default]" style="background-color: <?php echo $block[block_background]; ?>" data-equalizer-watch>
                            <div class="content-block-inner content-block-inner--<?php echo $block[block_content_type]; ?>">

                                <?php if ($block[block_content_type] == "repeatable-blocks") : ?>
                                   <div class="repeatable-block-container">
                                        <div class="row small-up-1 medium-up-2">
                                            <?php foreach ($block[repeatable_blocks] as $repeatable_block) : ?>
                                                <?php include(locate_template('templates/partials/content-blocks/repeatable-block-' . $repeatable_block[repeatable_hover_block_type] . '.php')); ?>
                                            <?php endforeach; ?>
                                        </div>
                                   </div>
                                <?php else : ?>
                                    <?php include(locate_template('templates/partials/content-blocks/' . $block[block_content_type] . '.php')); ?> 
                                <?php endif; ?>
                            
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>