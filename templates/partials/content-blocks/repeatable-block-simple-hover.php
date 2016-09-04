<div class="column">
    <div class="hover-block <?php echo (!empty($repeatable_block[repeatable_block_animation]) ? 'wow hide-on-load ' . $repeatable_block[repeatable_block_animation] : ''); ?>" data-wow-duration="2s">
        <div class="hover-block-title"><?php echo $repeatable_block[repeatable_block_title]; ?></div>
        <div class="hover-block-image lazy" data-original="<?php echo $repeatable_block[repeatable_block_background_image]; ?>"></div>
        <div class="hover-block-inner">
            <div class="hover-block-content">
                <?php echo $repeatable_block[repeatable_block_content]; ?>
            </div>
        </div>
    </div>
</div>