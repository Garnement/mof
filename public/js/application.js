
$(document).ready(function(){

  //$('.dropdown-toggle').dropdown();

  //Configuration du slider
  $('.bxslider').bxSlider({
    minSlides: 2,
    maxSlides: 2,
    slideWidth: 550,
    slideMargin: 20,
    infiniteloop: true,
    pager: false,
    nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
    nextText: '<img src="img/arrow_left.png">',
    prevText: '<img src="img/arrow_right.png">'
  });


  //Fenêtre modal
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
  });

 //Hover sur les slides
  var hoverSlides = function (){ $('.newsslide figcaption').hover(function(){

        $(this).css({
              backgroundColor: '#ea5954',
              color: '#fff',
              transition: '0.4s',
            });


                  }, function(){
                    $(this).css ('background-color', 'rgba(255,255,255,.8)');
                    $(this).css('color', '#000');
                  });
};

$('.newsslide figure').hover(hoverSlides(), hoverSlides());

}); //end document.ready
