$(window).scroll(function() {
  if ($(window).scrollTop() > 150) {
        //$('#back-top').fadeIn();
      //$('header.non-sticky').hide();
      $('.sticky_nav').show();
  } else {
      //$('#back-top').fadeOut();
      $('.sticky_nav').hide();
      //$('header.non-sticky').show();
  }
});
