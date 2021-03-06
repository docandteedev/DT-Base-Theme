import $ from 'jquery'
import Isotope from 'isotope'
import GoogleMapsLoader from 'google-maps'
import jQueryBridget from 'jquery-bridget'

// make Isotope a jQuery plugin
jQueryBridget('isotope', Isotope, $);

const initTope = () => {

    $('.post-map').each(() => {
        const key = $('.post-map').data('map-key');
        GoogleMapsLoader.KEY = key;

        let map;
        let goog;

        GoogleMapsLoader.load((google, map) => {

            goog = google;

            const myLatLng = {lat: 55.3781, lng: 3.4360};
            $('.post-map').data('hidden', false);

            map = new google.maps.Map($('.post-map')[0], {
                zoom: 4,
                center: myLatLng
            });

            const clearMarkers = () => {
                console.log('cleared')
            }

            const loadMarkers = () => {
                clearMarkers();
                const posts = $('.isotope').isotope('getFilteredItemElements');
                $(posts).each(function() {

                    const LatLng = {
                        lat: parseInt($(this).data('lat')),
                        lng: parseInt($(this).data('lng'))
                    };

                    const marker = new google.maps.Marker({
                        position: LatLng,
                        map,
                        animation: google.maps.Animation.DROP,
                        title: $(this).data('title')
                    });
                    console.log('Google Maps Markers Loaded ok');
                });
            }

            loadMarkers();
        });

        $('#toggle-map').click(() => {
            const map = $('.post-map');
            const toggle = $('#toggle-map');
            if (map.data('hidden')) {
                map.data('hidden', false);
                map.fadeIn();
            } else {
                map.data('hidden', true);
                map.fadeOut();
            }
        });
    });

    $('.isotope').each(function() {
        /* To use isotope: <div class="isotope" data-itemselector=".box" data-colwidth=".col-width" data-filters="#tope1-filters" data-filters-reset="#tope1-reset"> */

        const tope = $(this);
        let filters = tope.data('filters');
        const filtersReset = tope.data('filters-reset');
        const filterType = tope.data('filter-type');
        let doingFiltering = false;

        if (tope.length) {

            if ('undefined' !== typeof filters && filters.length) {
                filters = $(filters);
            }

            tope.isotope({
                itemSelector: tope.data('itemselector'),
                layoutMode: 'masonry'
            });

            $('#list-view-toggle').click(() => {
                $('.post-block').addClass('post-block-list');
                $('.post-block').removeClass('post-block');
                tope.isotope({
                    layoutMode: 'vertical'
                });
            });

            $('#grid-view-toggle').click(() => {
                $('.post-block-list').addClass('post-block');
                $('.post-block-list').removeClass('post-block-list');
                tope.isotope({
                    layoutMode: 'masonry'
                });
            });

            if ('undefined' !== typeof filtersReset && filtersReset.length) {
                const topeReset = $(filtersReset);
                topeReset.click(() => {

                    if (doingFiltering) {
                        return false;
                    }
                    doingFiltering = true;

                    tope.isotope({filter: '*'});
                    filters.removeAttr('disabled');
                    $('body, html').scroll();
                    doingFiltering = false;

                    filters.each(function() {
                        const filter = $(this);
                    });

                    return false;
                });
            }

            if ('undefined' !== typeof filters && filters.length) {
                const topeFilters = $(filters);

                topeFilters.change(function() {

                    if (doingFiltering) {
                        return false;
                    }
                    doingFiltering = true;

                    filters.attr('disabled', 'disabled');

                    let filterString = '';

                    if (filterType === 'Tax Selects') {
                        filters.each(function() {

                            const filter = $(this);
                            const taxonomy = filter.data('tax');
                            const term = filter.val();

                            if (!taxonomy || !term || '...' === term) {
                                return;
                            }

                            filterString += `.${taxonomy}-${term}`;
                        });
                    } else {

                        const filter = $(this);
                        const taxonomy = filter.data('tax');
                        const term = filter.val();

                        if (!taxonomy || !term || '...' === term) {
                            return;
                        }

                        filterString += `.${taxonomy}-${term}`;

                    }

                    if (filterString.length) {
                        tope.isotope({filter: filterString});
                    } else {
                        tope.isotope({filter: '*'});
                    }

                    filters.removeAttr('disabled');

                    $('body, html').scroll();
                    doingFiltering = false;

                    return false;
                });

            }
        }
    });
}

export default initTope
