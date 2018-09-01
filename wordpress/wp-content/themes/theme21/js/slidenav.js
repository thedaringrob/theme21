(function($) {
  console.log('JQ is go')
  $('#toggle').on('click', function(){
    console.log('heard ya');
  });
$('#toggle').toggle(
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost:8888/theme21/wordpress/wp-content/themes/theme21/assets/hamburger.svg" alt="close" />');
        });
    },
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost:8888/theme21/wordpress/wp-content/themes/theme21/assets/hamburger.svg" alt="close" />');
        });
    }
);
})(jQuery);
