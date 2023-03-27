import './bootstrap';

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
    rtl:true,
    center: true,
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:7
        }
    }
});

/* function selectImage(src) {
    var selectedImage = document.getElementById("selected-image");
    selectedImage.src = src;
  }
  $(document).ready(function() {
    // Iniciar el slider
    $("#myCarousel").carousel();
    
    // Pausar el slider al hacer hover
    $("#myCarousel").hover(function() {
      $(this).carousel('pause');
    }, function() {
      $(this).carousel('cycle');
    });
  }); */
  
/*   function selectImage(src) {
    var selectedImage = document.getElementById("selected-image");
    selectedImage.src = src;
  }         */