$(document).ready(function() {
    $('.carousel').slick({
        slidesToShow: 3, // Mostra 3 logos por vez (horizontal)
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        
    });
});


$('.carousel').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay: true,
    dots: true,
    
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
          arrows: true,
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,  
        }
      }
    ]
});