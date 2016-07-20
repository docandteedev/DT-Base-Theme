(function ($) {

    $('.post-map').each(function () {
        var key = $('.post-map').data('map-key');
        GoogleMapsLoader.KEY = key;

        var map;
        var goog;

        GoogleMapsLoader.load(function (google, map) {

            goog = google;

            var myLatLng = { lat: 55.3781, lng: 3.4360 };
            $('.post-map').data('hidden', false);

            map = new google.maps.Map($('.post-map')[0], {
                zoom: 4,
                center: myLatLng
            });

            function clearMarkers() {
                console.log("Heloo");
            }

            function loadMarkers() {
                clearMarkers();
                var posts = $('.isotope').isotope('getFilteredItemElements');
                $(posts).each(function () {

                    var LatLng = {
                        lat: parseInt($(this).data('lat')),
                        lng: parseInt($(this).data('lng'))
                    };

                    var marker = new google.maps.Marker({
                        position: LatLng,
                        map: map,
                        drop: true,
                        title: $(this).data('title')
                    });
                    console.log("Google Maps Markers Loaded ok");
                });
            }

            loadMarkers();
        });

        $('#toggle-map').click(function () {
            var map = $('.post-map');
            var toggle = $('#toggle-map');
            if (map.data('hidden')) {
                map.data('hidden', false);
                map.fadeIn();
            } else {
                map.data('hidden', true);
                map.fadeOut();
            }
        });
    });

    $('.isotope').each(function () {
        /* To use isotope: <div class="isotope" data-itemselector=".box" data-colwidth=".col-width" data-filters="#tope1-filters" data-filters-reset="#tope1-reset"> */

        var tope = $(this);
        var filters = tope.data('filters');
        var filters_reset = tope.data('filters-reset');
        var filter_type = tope.data('filter-type');
        var doing_filtering = false;

        if (tope.length) {

            if ('undefined' !== typeof filters && filters.length) {
                filters = $(filters);
            }

            tope.isotope({
                itemSelector: tope.data('itemselector'),
                layoutMode: 'masonry'
            });


            $('#list-view-toggle').click(function(){
              $('.post-block').addClass('post-block-list');
              $('.post-block').removeClass('post-block');
              tope.isotope({
                layoutMode: 'vertical'
              });
            });

            $('#grid-view-toggle').click(function(){
              $('.post-block-list').addClass('post-block');
              $('.post-block-list').removeClass('post-block-list');
              tope.isotope({
                layoutMode: 'masonry'
              });
            });

            if ('undefined' !== typeof filters_reset && filters_reset.length) {
                var tope_reset = $(filters_reset);
                tope_reset.click(function () {

                    if (doing_filtering) {
                        return false;
                    }
                    doing_filtering = true;

                    tope.isotope({ filter: '*' });
                    filters.removeAttr('disabled');
                    $('body, html').scroll();
                    doing_filtering = false;

                    filters.each(function () {
                        var filter = $(this);
                    });

                    return false;
                });
            }

            if ('undefined' !== typeof filters && filters.length) {
                var tope_filters = $(filters);

                tope_filters.change(function () {

                    if (doing_filtering) {
                        return false;
                    }
                    doing_filtering = true;

                    filters.attr('disabled', 'disabled');

                    var filter_string = '';

                    if(filter_type === 'Tax Selects') {
                      filters.each(function () {

                          var filter = $(this);
                          var taxonomy = filter.data('tax');
                          var term = filter.val();

                          if (!taxonomy || !term || '...' === term) {
                              return;
                          }

                          filter_string += '.' + taxonomy + '-' + term;
                      });
                    } else {

                        var filter = $(this);
                        var taxonomy = filter.data('tax');
                        var term = filter.val();

                        if (!taxonomy || !term || '...' === term) {
                            return;
                        }

                        filter_string += '.' + taxonomy + '-' + term;

                    }

                    if (filter_string.length) {
                        tope.isotope({ filter: filter_string });
                    } else {
                        tope.isotope({ filter: '*' });
                    }

                    filters.removeAttr('disabled');

                    $('body, html').scroll();
                    doing_filtering = false;

                    return false;
                });

            }
        }
    });
})(jQuery); // Fully reference jQuery after this point.
