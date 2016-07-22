import Rx from 'rx'
import $ from 'jquery' 

const initSearch = () => {
  // Page Search
  $('.search-form').each(function(){
    // Search Wordpress for a given term
    function searchWordpress (term, post_type) {
      return $.ajax({
        url: 'http://localhost:8000/wp-json/swp_api/search?&s='+term,
        dataType: 'json'
      }).promise();
    }

    function main() {
      var $input = $(this).find('.search-field'),
          $search_box = $(this).find('.search-results'),
          $results = $(this).find('.search-results-list');

      var focusin = Rx.Observable.fromEvent($input, 'focusin');
      focusin.subscribe(function(){
        $search_box.fadeIn();
      });

      var focusout = Rx.Observable.fromEvent($input, 'focusout');
      focusout.subscribe(function(){
        $search_box.fadeOut();
      });

      // Get all distinct key up events from the input and only fire if long enough and distinct
      var keyup = Rx.Observable.fromEvent($input, 'keyup')
        .map(function (e) {
          return e.target.value; // Project the text from the input
        })
        .filter(function (text) {
          if (text.length === 0) {
            $search_box.fadeOut();
          }
          return text.length > 2; // Only if the text is longer than 2 characters
        })
        .debounce(750 /* Pause for 750ms */ )
        .distinctUntilChanged(); // Only if the value has changed

      var searcher = keyup.flatMapLatest(searchWordpress);

      searcher.subscribe(
        function (data) {
          $results
            .empty()
            .append ($.map(data, function (v) {
              var html = [
                "<a href='" + v.slug + "'>",
                  "<img src='" + v.featured_image + "' alt='search-image' />",
                  "<h5>" + v.title.rendered + "</h5>",
                  "<span>" + v.type + "</span>",
                "</a>"
              ].join("\n");
              return $('<li>').html(html);
            })).show('slow');
        },
        function (error) {
          $results
            .empty()
            .append($('<li>'))
            .text('Error:' + error);
        });
    }

    $(main);
  });

  $('.archive-search-form').each(function(){
    console.log("New version");
    // Search Wordpress for a given term
    function searchWordpress (term, post_type) {
      return $.ajax({
        url: 'http://localhost:8000/wp-json/swp_api/search?&s='+term,
        dataType: 'json'
      }).promise();
    }

    function main() {
      var $input = $(this).find('.archive-search-field'),
          $search_box = $(this).find('.archive-search-results'),
          $results = $(this).find('.archive-search-results-list');

      var focusin = Rx.Observable.fromEvent($input, 'focusin');
      focusin.subscribe(function(){
        $search_box.fadeIn();
      });

      var focusout = Rx.Observable.fromEvent($input, 'focusout');
      focusout.subscribe(function(){
        $search_box.fadeOut();
      });

      // Get all distinct key up events from the input and only fire if long enough and distinct
      var keyup = Rx.Observable.fromEvent($input, 'keyup')
        .map(function (e) {
          return e.target.value; // Project the text from the input
        })
        .filter(function (text) {
          if (text.length === 0) {
            $search_box.fadeOut();
          }
          return text.length > 2; // Only if the text is longer than 2 characters
        })
        .debounce(750 /* Pause for 750ms */ )
        .distinctUntilChanged(); // Only if the value has changed

      var searcher = keyup.flatMapLatest(searchWordpress);

      searcher.subscribe(
        function (data) {
          $results
            .empty()
            .append ($.map(data, function (v) {
              var html = [
                "<a href='" + v.slug + "'>",
                  "<img src='" + v.featured_image + "' alt='search-image' />",
                  "<h5>" + v.title.rendered + "</h5>",
                  "<span>" + v.type + "</span>",
                "</a>"
              ].join("\n");
              return $('<li>').html(html);
            })).show('slow');
        },
        function (error) {
          $results
            .empty()
            .append($('<li>'))
            .text('Error:' + error);
        });
    }

    $(main);
  });

}

export default initSearch