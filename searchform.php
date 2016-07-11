<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" class="input-group-field search-field" value="" name="s" id="s" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>">
		<button type="submit" name="button" class="button search-submit">
			<i class="fa fa-search search-icon" type="button"  aria-hidden="true"></i>
		</button>
	</div>
</form>
