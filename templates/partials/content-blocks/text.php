<?php if (!empty($block[block_title])) : ?>
    <h2 class="content-block-title"><?php echo $block[block_title_text]; ?></h1>
<?php elseif (!empty($block[block_title_image])) : ?>
    <img class="content-block-img-title" src="<?php echo $block[block_title_image]; ?>" alt="title-img">
<?php endif; ?>

<div class="content-block-content">
    <?php echo $block[block_content]; ?>
</div>