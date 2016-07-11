(function($) {
    $( '.isotope' ).each( function() {
    /* To use isotope: <div class="isotope" data-itemselector=".box" data-colwidth=".col-width" data-filters="#tope1-filters" data-filters-reset="#tope1-reset"> */
    
    var tope = $( this );
    var filters = tope.data( 'filters' );
    var filters_reset = tope.data( 'filters-reset' );
    var doing_filtering = false;
    
    if ( tope.length ) {
        
        if ( 'undefined' != typeof filters && filters.length ) {
            filters = $( filters );
        }

        tope.isotope( {
            itemSelector: tope.data( 'itemselector' ),
            layoutMode: 'masonry'
        } );

        if ( 'undefined' != typeof filters_reset && filters_reset.length ) {
            var tope_reset = $( filters_reset );
            
            tope_reset.click( function() {

                if ( doing_filtering ) { return false; }
                doing_filtering = true;
                
                tope.isotope( { filter: '*' } );
                filters.removeAttr( 'disabled' );
                $( 'body, html' ).scroll();
                doing_filtering = false;
                
                filters.each( function() {
                        
                    var filter = $( this );
                    console.log(filter);    
                } );

                return false;
                
            } );
        }
        
        if ( 'undefined' != typeof filters && filters.length ) {
            var tope_filters = $( filters );
        
            tope_filters.change( function() {
                
                if ( doing_filtering ) { return false; }
                doing_filtering = true;
                
                filters.attr( 'disabled', 'disabled' );
                    
                    var filter_string = '';
                    
                    filters.each( function() {
                        
                        var filter = $( this );
                        var taxonomy = filter.data( 'tax' );
                        var term = filter.val();
                        
                        if ( !taxonomy || !term || '...' == term ) { return; }
                        
                        filter_string+= '.' + taxonomy + '-' + term;
                        
                    } );
                    
                    if ( filter_string.length ) {
                        tope.isotope( { filter: filter_string } );
                    } else {
                        tope.isotope( { filter: '*' } );
                    }
                    
                    filters.removeAttr( 'disabled' );
                    
                    $( 'body, html' ).scroll();
                    doing_filtering = false;
                    
                    return false;
                    
                } );
                
        }

    }
    
} );
})(jQuery); // Fully reference jQuery after this point.