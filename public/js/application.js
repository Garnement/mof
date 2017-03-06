
$(document).ready(function(){

  $('.bxslider').bxSlider({
    minSlides: 2,
    maxSlides: 2,
    slideWidth: 570,
    slideMargin: 20,
    infiniteloop: true,
    pager: false,
    nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
    nextText: '<img src="img/arrow_left.png">',
    prevText: '<img src="img/arrow_right.png">'
  });

  //Hover sur les hobbies
  $('.newsslide figcaption').hover(function(){

      $(this).css({
        backgroundColor: '#ea5954',
        color: '#fff'
      });
      var test = $('.figfirstline').attr('data-value');
      $(test).css('color', '#fff');


  }, function(){
    $(this).css ('background-color', 'rgba(255,255,255,.8)');
    $(this).css('color', '#000');
  });

});
