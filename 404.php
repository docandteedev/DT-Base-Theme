<div class="error-404-page">
  <div class="error-404-site-logo">
    <?php echo the_custom_logo(); ?>
    <?php if (!has_custom_logo()) : ?>
      <h1><?php bloginfo('name'); ?></h1>
    <?php endif; ?>
  </div>
  <h1 class="error-404-number">404</h1>
  <h1 class="error-404-title">We <span class="highlighted">can't find the page</span> you are looking for.</h1>
    <?php get_search_form(); ?>
  <a class="error-404-return-button button" href="/"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Go Back</a>
</div>