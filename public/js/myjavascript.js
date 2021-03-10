// full image slider
var slideCount = document.querySelectorAll('.slider .slide-item').length;
  var slideWidth = document.querySelectorAll('.slider-outer')[0].offsetWidth;
  var slideHeight = document.querySelectorAll(".slider-outer")[0].offsetHeight;

  var sliderUlWidth = slideCount * slideWidth;
  document.querySelectorAll('.slider')[0].style.cssText = "width:" + sliderUlWidth + "px";

  for (var i = 0; i < slideCount; i++) {
    document.querySelectorAll('.slide-item')[i].style.cssText = "width:" + slideWidth + "px;height:" + slideHeight + "px";
  }

  setInterval(function() {
    moveRight();
  }, 3000);
  var counter = 1;

  function moveRight() {
    var slideNum = counter++
      if (slideNum < slideCount) {
        var transformSize = slideWidth * slideNum;
        document.querySelectorAll('.slider')[0].style.cssText = 
          "width:" + sliderUlWidth + "px; -webkit-transition:all 800ms ease; -webkit-transform:translate3d(-" + transformSize + "px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(-" + transformSize + "px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(-" + transformSize + "px, 0px, 0px);transition:all 800ms ease; transform:translate3d(-" + transformSize + "px, 0px, 0px)";

      } else {
        counter = 1;
        document.querySelectorAll('.slider')[0].style.cssText = "width:" + sliderUlWidth + "px;-webkit-transition:all 800ms ease; -webkit-transform:translate3d(0px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(0px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(0px, 0px, 0px);transition:all 800ms ease; transform:translate3d(0px, 0px, 0px)";
      }

  }



/*active navbar*/ 








/*scrool to top*/

$(document).ready(function(){
  
  $(window).scroll(function(){

    if($(this).scrollTop() > 40){
      $('#topBtn').fadeIn();
    }
    else{
       $('#topBtn').fadeOut();
    }

  });

  $("#topBtn").click(function(){
    $('html , body').animate({scrollTop : 0},800);

  });


});



/*our partner*/

$('.logoslider').slick({
 slidesToShow:4,
 slidesToScroll:1,
 arrows:false,
 dots:false,
 autoplay:true,
 autoplaySpeed:500,
 infinite:true,

 responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]


});




/*Solution */


$('.post_wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
   dots:true,
   autoplay: true,
  autoplaySpeed: 2000,
  nextArrow:$('.next'),
  prevArrow:$('.prev'),
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]



});



/* gallery expand image*/ 

  