$(document).ready(function () {

  var welcomeSection = $('.welcome-section');

  setTimeout(function() {
    welcomeSection.removeClass('content-hidden');
  }, 200);
  $(".button-collapse").sideNav();
  var documentElem = $(document),
      nav = $('nav'),
      lastScrollTop = 0;




  documentElem.on('scroll', function () {
    var currentScrollTop = $(this).scrollTop();


    //scroll down
    if (currentScrollTop > lastScrollTop)
      nav.addClass('hidden');
    //scroll up
    else
      nav.removeClass('hidden');

    lastScrollTop = currentScrollTop;
  });
  $('.slider').slider();

  function marginSlider() {
    return $('.fullscreen').height();
  }
  AOS.init();
});