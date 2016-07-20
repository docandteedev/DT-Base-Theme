<?php
global $post_type;
global $show_search;
?>

<?php if ($show_search): ?>

  <div class="topbar post-archive-search">
    <div class="topbar-right">
      <form role="search" method="get" class="archive-search-form" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
      	<div class="input-group">
      		<input type="text" class="input-group-field archive-search-field" value="" name="s" id="s" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" data-search-type="<?php echo $post_type; ?>">
      		<button type="submit" name="button" class="button search-submit">
      			<i class="fa fa-search search-icon" type="button"  aria-hidden="true"></i>
      		</button>
      	</div>
      </form>
      <div class="archive-search-results">
      	<span>Seach Results:</span>
      	<ul class="archive-search-results-list">

      	</ul>
      </div>
    </div>
  </div>

<?php endif; ?>
