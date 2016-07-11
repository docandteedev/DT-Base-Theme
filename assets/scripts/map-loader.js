(function($) {

var key = $('.post-map').data('map-key');
GoogleMapsLoader.KEY = key;

GoogleMapsLoader.load(function(google) {

  var myLatLng = {lat: 55.3781, lng: 3.4360};

  var map = new google.maps.Map($('.post-map')[0], {
    zoom: 4,
    center: myLatLng
  });

  $('.post-block').each(function() {

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

  });

});

console.log("DONE MAPPING");
})(jQuery);
