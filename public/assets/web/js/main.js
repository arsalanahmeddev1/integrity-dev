$(document).ready(function () {
  $("#loading-screen").delay(2000).fadeOut("slow");
  $(".loading").delay(2000).fadeOut("slow");
});
document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth < 1025) {
    AOS.init({
      disable: true
    });
  } else {
    AOS.init();
  }
});
// for lazy load in images
const images = document.querySelectorAll('img');
images.forEach(img => {
  img.setAttribute('loading', 'lazy');
});
// mobile menu
let navs = document.querySelector('.primary-navs');
let menuIcon = document.querySelectorAll('.menu-toggle');
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});


// team slider
$('.team-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  arrows: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
  ]
});

$('.scroll-to-top').on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, 'smooth');
});


// window.addEventListener('scroll', function() {
//   const header = document.querySelector('.header');
//   if (window.scrollY > 300) {
//     header.classList.add('sticky');
//   } else {
//     header.classList.remove('sticky');
//   }
// });
