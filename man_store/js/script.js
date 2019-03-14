window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 768 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-70px";
  }
}
 
 $(document).ready(function(){
    $("#menu__header").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});

$(document).ready(function(){
  $("#menu__top").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1500);
  });
});

$('.menu-btn').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $('.menu-nav').toggleClass('menu-nav_active');
  });

