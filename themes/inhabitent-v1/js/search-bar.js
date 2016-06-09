//This shows and/or hides the search bar on the site's main navigation.

jQuery(document).ready(function($) {

  $('.icon-search').on('click', function() {
    event.preventDefault();
    $('.search-field').toggle('slow');
  })

});
