<div class="content-box  row small-up-1 medium-up-2">
    <?php foreach($block[repeatable_hover_blocks] as $repeatable_block): ?>
        <?php 
            $query = new WP_Query(array(
                'post_type' => $repeatable_block[repeatable_hover_block_post_type]
            )); ?>
        <pre>
            <?php print_r($query); ?>
        </pre>
    <?php endforeach; ?>
</div>