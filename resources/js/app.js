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
