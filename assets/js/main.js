$(document).ready(function () {

  $('#hero-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
  });
  $('#testi-slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 20,
    nav: true,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    }
  });




  $('#service-slider').owlCarousel({
    loop: true,
    // center: true,
    margin: 10,
    nav: true,
    navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>", "<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
    dots: false,
    // autoplay:true,
    // autoplayTimeout:2000,
    // autoplayHoverPause:false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  })




  $('#gallery-slider').owlCarousel({
    loop: true,
    // center: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>", "<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
    dots: false,
    // autoplay:true,
    // autoplayTimeout:2000,
    // autoplayHoverPause:false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  })



});






/*----------------------------
 Gallery
------------------------------ */
"use strict";
$("a.gallery").prettyPhoto({ theme: 'dark_rounded', social_tools: false });












document.addEventListener('DOMContentLoaded', function () {
  const faqItems = document.querySelectorAll('.faq-wrap__question');

  faqItems.forEach(button => {
    button.addEventListener('click', function () {
      const item = this.closest('.faq-wrap__item');
      const isActive = item.classList.contains('active');

      // Close all other items
      document.querySelectorAll('.faq-wrap__item.active').forEach(activeItem => {
        if (activeItem !== item) {
          activeItem.classList.remove('active');
        }
      });

      // Toggle current item
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
      }
    });
  });
});









// Add minus icon for collapse element which is open by default

$(".collapse.show").each(function () {

  $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");

});



// Toggle plus minus icon on show hide of collapse element

$(".collapse").on('show.bs.collapse', function () {

  $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");

}).on('hide.bs.collapse', function () {

  $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");

});

$(document).ready(function () {
  // Back to Top Button Logic with Progress
  var progressPath = document.querySelector('.progress-wrap path');
  if (progressPath) {
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength / height);
      progressPath.style.strokeDashoffset = progress;
    }

    updateProgress();
    $(window).scroll(updateProgress);

    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $('.progress-wrap').addClass('active-progress');
      } else {
        $('.progress-wrap').removeClass('active-progress');
      }
    });

    $('.progress-wrap').click(function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, 800, 'swing');
      return false;
    });
  }

  // Smooth scrolling for all internal anchor links
  $('a[href^="#"]').on('click', function (e) {
    var target = this.hash;
    if (target && target !== '#') {
      var $target = $(target);
      if ($target.length) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $target.offset().top - 50 // offset for fixed headers
        }, 800, 'swing');
      }
    }
  });
});

// SmoothScroll configuration
SmoothScroll({
    animationTime: 1200, // Increased for a longer, silkier glide
    stepSize: 120, // Increased to cover more distance per tick
    accelerationDelta: 50,
    accelerationMax: 3,
    touchpadSupport: false, 
});
