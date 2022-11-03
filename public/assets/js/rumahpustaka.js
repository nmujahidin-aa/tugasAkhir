// Replace all icons on page
feather.replace();
$(".verified").attr("data-bs-toggle", "tooltip");
$(".verified").attr("data-bs-placement", "bottom");
$(".verified").attr("title", "Penyelenggara terverifikasi");
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
var save_deg = 0;
$('.dropdown-animation').click(function() {
      if (save_deg == 180) {
          save_deg = 0;
      } else {
          save_deg = 180;
      }
      $('.dropdown-animation').prop('disabled', true);
      $('.dropdown-an-icon').animate(
          { deg: save_deg },
          {
              duration: 300,
              step: function(now) {
                  $(this).css({ transform: 'rotate(' + now + 'deg)' });
              }
          }
      )
      .promise()
      .then(function() {
          $('.dropdown-animation').prop('disabled', false);
      });
});

var owl = $('.reviews-holder');
  owl.owlCarousel({
      items: 3,
      loop:true,
      autoplay:true,
      navBy: 1,
      autoplayTimeout: 4500,
      autoplayHoverPause: true,
      smartSpeed: 1500,
      responsive:{
          0:{
              items:1
          },
          767:{
              items:1
          },
          768:{
              items:1
          },
          991:{
              items:1
          },
          1000:{
              items:1
          }
      }
});
var partner = $('.team-carousel');
  partner.owlCarousel({
      items: 4,
      loop:true,
      autoplay:true,
      navBy: 1,
      nav: false,
      dots: false,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      smartSpeed: 900,
      responsive:{
          0:{
              items:2
          },
          550:{
              items:2
          },
          767:{
              items:3
          },
          768:{
              items:3
          },
          992:{
              items:4
          },
          1100:{
              items:4
          }
      }
  });
$(document).ready(function () {
    $("#placeholder_page").remove();
    $("#page_content").show();
});