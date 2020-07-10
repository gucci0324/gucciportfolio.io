$(function() {
  $('#pro,#sl,#sv,#wk,#ct').click(function(){
     var speed = 1000;
     var href = $(this).attr('href');
     var target = $(href == '#' || href == "" ? 'html' : href);
     var position = target.offset().top;

     $('body, html').animate({scrollTop:position}, speed, 'swing');
      return false;
  });

   var $allMsg = $('#title');
   var $wordList = $('#title').html().split("");
   $('#title').html("");
   $.each($wordList, function(idx, elem) {
   var newEL = $("<span/>").text(elem).css({ opacity: 0 });
   newEL.appendTo($allMsg);
   newEL.delay(idx * 70);
   newEL.animate({ opacity: 1 }, 200);
  });

  $(window).scroll(function (){
   $('.fadein').each(function(){
       var targetElement = $(this).offset().top;
       var scroll = $(window).scrollTop();
       var windowHeight = $(window).height();
       if (scroll > targetElement - windowHeight + 200){
           $(this).css('opacity','1');
           $(this).css('transform','translateY(0)');
       }
   });
  });
});
