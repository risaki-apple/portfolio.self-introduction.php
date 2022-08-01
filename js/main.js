$(function(){

  var scrolltimer;
  $(window).on('scroll', function(){
    var scrolltimer = 0;
    if (scrolltimer != null) {
      clearTimeout(scrolltimer);
    }
    scrolltimer = setTimeout(function () {
      addShow();
    }, 300);
  });

  function addShow() {
    $(".trans").each(function(){
      var scrTop = $(window).scrollTop();
      var scrBtm = scrTop + $(window).height();
      var itemTop = $(this).offset().top;
      if($(this).hasClass('to-up')) itemTop = itemTop - 48;
      var itemBtm = itemTop + $(this).height();
      if(itemTop < scrBtm && itemBtm > scrTop) {
        $(this).addClass('show');
      } else {
        $(this).removeClass('show');
      }
    });
  }
});

$('a[href^="#"]').click(function() {
  var speed = 800;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $('body,html').animate({scrollTop:position}, speed, 'swing');
  return false;
});