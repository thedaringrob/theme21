(function($) {
  console.log('JQ is go')
  $('.burger-container').on('click', function(){
    console.log('heard ya click');
    $('.burger-container').toggleClass('active');
  });

  $('.burger-container').toggle(
    function() {
        $('#popout').animate({ right: 0 }, 200, function() {
          console.log('menu in')
        });
    },
    function() {
        $('#popout').animate({ right: -250 }, 200, function() {
          console.log('menu out')
        });
    }
);

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 75;
var navbarHeight = $('.burger-container').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Remove nave on Scroll Down
        $('.burger-container').removeClass('slide-down').addClass('slide-up');
    } else {
        // Nave comes back on Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.burger-container').removeClass('slide-up').addClass('slide-down');
        }
    }

    lastScrollTop = st;
}
})(jQuery);
