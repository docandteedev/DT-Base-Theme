<div class="off-canvas position-right off-canvas-search" id="offCanvasRight" data-off-canvas data-position="right">

  <button class="close-button" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>

  <ul class="vertical menu" data-drilldown><!-- start of the drilldown multi level menu -->
  
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>" autocomplete="off">
      <div class="input-group">
        <input type="text" class="input-group-field search-field" value="" name="s" id="s" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" data-search-type="">
      </div>
    </form>

    <div class="search-results">
      <span>Seach Results:</span>
      <ul class="search-results-list">
          
      </ul>
    </div>

  </ul>

</div>
