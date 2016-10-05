// Needs to be ES5 syntax
(function($) {

  var searchWordpress = function searchWordpress() {
    var testimonials = [];
    var promise = $.ajax({
      url: 'http://wegetcreative.co.uk/wholepartnership/wp-json/wp/v2/testimonial',
      dataType: 'json'
    }).promise();
    promise.then(function(data) {
      data.map(function(testimonial) {
        testimonials.push({
          text: testimonial.title.rendered,
          value: '<blockquote class="blockquote">' + testimonial.content.rendered + '<cite>' + testimonial.title.rendered + '</cite>' + '</div>'
        });
      });
    });
    return testimonials;
  };

  tinymce.PluginManager.add('testimonial_attach_button', function(editor, url) {
    var values = searchWordpress();
    editor.addButton('testimonial_attach_button', {
      tooltip: 'Inject a testimonial into article',
      icon: 'icon dashicons-testimonial',
      onclick: function onclick() {
        editor.windowManager.open({
          title: 'Attach testimonial to article',
          body: [{
            type: 'listbox',
            name: 'testimonial',
            label: 'Testimonial',
            'values': values
          }],
          onsubmit: function onsubmit(e) {
            // Insert content when the window form is submitted
            editor.insertContent(e.data.testimonial);
          }
        });
      }
    });
  });
})(jQuery);