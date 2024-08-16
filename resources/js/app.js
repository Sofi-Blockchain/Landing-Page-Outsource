import './bootstrap';

import AOS from 'aos';
AOS.init();

$(document).ready(function () {
  //   var lastScrollTop = 0;
  var header = $('#header');
  //   $(window).scroll(function () {
  //     var scrollTop = $(this).scrollTop();

  //     // Check if the user is scrolling down
  //     if (scrollTop > lastScrollTop) {
  //       header.addClass('hide');
  //     } else {
  //       // Check if the user is scrolling up
  //       header.removeClass('hide');
  //     }

  //     // Update the last scroll position
  //     lastScrollTop = scrollTop;
  //   });

  $('.off-canvas-toggle').click(function () {
    header.hasClass('header--active') ? header.removeClass('header--active') : header.addClass('header--active');
  });

  if ($('#home').length > 0) {
    $(window).scroll(function () {
      var scrollPosition = $(window).scrollTop();
      var sectionPosition = $('#show-header').offset().top;

      if (scrollPosition >= sectionPosition) {
        header.show();
      } else {
        header.hide();
      }
    });
  }
});

window.onload = function () {
    $('#loading').fadeOut(0);
    $('#body').css({ visibility: 'visible' });
    AOS.init({
        once: true,
    });
};

import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper:
const storySwiper = new Swiper('.story-swiper', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
  navigation: {
    nextEl: '#story-swiper-next',
    prevEl: '#story-swiper-prev',
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    clickable: true,
  },
  on: {
    slideChange: function () {
      var currentSlideIndex = this.activeIndex;
      var currentSlideElement = this.slides[currentSlideIndex];
      var tabContentId = $(currentSlideElement).data('content');
      $(currentSlideElement).parents('#story-container').find('.tab-content').addClass('swiper-hide');
      $(tabContentId).removeClass('swiper-hide');
      $('.slide-overlay').removeClass('slide-overlay--active');
      $(currentSlideElement).find('.slide-overlay').addClass('slide-overlay--active');
    },
  },
});

document.addEventListener('DOMContentLoaded', function () {
  $('.tab-button').click(function () {
    const _this = $(this);
    const tabId = _this.data('tab');
    $('.tab-content').addClass('swiper-hide');
    $(tabId).removeClass('swiper-hide');
    $('.tab-button').removeClass(
      'bg-gradient--primary text-text--light dark:text-text--dark dark:text-text--light text-text--dark',
    );
    $('.tab-button').find('svg path').css({
      fill: '#dbc69d',
    });

    _this.addClass('bg-gradient--primary text-text--light');
    $(_this).find('svg path').css({
      fill: '#000',
    });
  });

  var streamSwiper = new Swiper('.stream-swiper', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 10,
    autoplay: {
      delay: 4000,
    },
    navigation: {
      nextEl: '#stream-swiper-next',
      prevEl: '#stream-swiper-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
    on: {
      slideChange: function () {
        var currentSlideIndex = this.activeIndex;
        var currentSlideElement = this.slides[currentSlideIndex];
        var url = $(currentSlideElement).find('img').attr('src');
        $('#hero-panel img').attr('src', url);
        $('#hero-panel').css('--image', 'url(' + url + ')');
      },
    },
  });

  var trendingSwiper = new Swiper('.trending-swiper', {
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },
    navigation: {
      nextEl: '#trending-swiper-next',
      prevEl: '#trending-swiper-prev',
    },
  });

  let initSlide = $('.milestone-swiper .swiper-slide').length - 1;
  var milestoneSwiper = new Swiper('.milestone-swiper', {
    slidesPerView: 1,
    centeredSlides: true,
    initialSlide: initSlide,
    navigation: {
      nextEl: '#milestone-swiper-next',
      prevEl: '#milestone-swiper-prev',
    },
  });

  let ecoAllSlideAmount = $('.all-swiper .swiper-slide').length;
  const ecosystemSwiper = new Swiper('.all-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: ecoAllSlideAmount === 3,
    initialSlide: ecoAllSlideAmount === 3 ? 1 : 0,
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
    autoplay: {
      delay: 2000,
    },
    pagination: {
      clickable: true,
    },
  });

  let ecoEntertainmentSlideAmount = $('.entertainment-swiper .swiper-slide').length;
  const entertainmentSwiper = new Swiper('.entertainment-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: ecoEntertainmentSlideAmount === 3,
    initialSlide: ecoEntertainmentSlideAmount === 3 ? 1 : 0,
    allowTouchMove: ecoEntertainmentSlideAmount >= 4,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  let ecoInvestmentSlideAmount = $('.investment-swiper .swiper-slide').length;
  const investmentSwiper = new Swiper('.investment-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: ecoInvestmentSlideAmount === 3,
    initialSlide: ecoInvestmentSlideAmount === 3 ? 1 : 0,
    allowTouchMove: ecoInvestmentSlideAmount >= 4,
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
    },
  });

  let operationSlideAmount = $('.operation-swiper .swiper-slide').length;
  const operationSwiper = new Swiper('.operation-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: operationSlideAmount === 3,
    initialSlide: operationSlideAmount === 3 ? 1 : 0,
    allowTouchMove: operationSlideAmount >= 4,
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  const careerSwiper = new Swiper('#career-swiper', {
    direction: $(window).width() > 640 ? 'vertical' : 'horizontal',
    slidesPerView: 1,
    grabCursor: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
    allowTouchMove: false,
  });

  $('.faq-toggle').click(function (e) {
    if (!$(this).parents('.faq').hasClass('active')) {
      $('.faq').removeClass('active');
      $(this).parents('.faq').addClass('active');
    } else {
      $(this).parents('.faq').removeClass('active');
    }
  });

  $('.modal').click(function (e) {
    if ($(e.target).parents('.modal__content').length === 0) {
      $('.modal--in').removeClass('modal--in');
      if ($(this).find('video').length > 0) {
        $(this).find('video')[0].pause();
      }

      if ($(this).find('iframe').length > 0) {
        $(this)
          .find('iframe')
          .each(function (index) {
            $(this).attr('src', $(this).attr('src'));
            return false;
          });
      }
    }
  });

  $('.modal-toggle').click(function (e) {
    let modalID = $(this).data('modal');
    $(modalID).addClass('modal--in');
    // Create DOM input hidden
      if ($(this).data('hidden-id')) {
        const hiddenID = $(this).data('hidden-id');
        if ($(modalID).find('form').length > 0 && $(modalID).find('form input[name="hidden-id"]').length === 0) {
          $(modalID).find('form').append('<input type="hidden" name="hidden-id" value="' + hiddenID + '">');
        } else {
          $(modalID).find('form input[name="hidden-id"]').val(hiddenID);
        }
      }
  });

  $('.faq-trigger').click(function () {
    $(this).parents('.faq').find('.faq-toggle').trigger('click');
  });
});

$(window).on('scroll', function () {
  $('.a-num').each(function () {
    if ($(this).isInViewport()) {
      setTimeout(function () {
        const counters = document.querySelectorAll('.a-num');
        const speed = 1000000;
        if (counters.length > 0) {
          counters.forEach((counter) => {
            const animate = () => {
              const value = +$(counter).data('to');
              const data = +$(counter).text();
              if (value > data) {
                const time = value / speed;
                if (data < value) {
                  counter.innerText = Math.ceil(data + time);
                  setTimeout(animate, 20000);
                } else {
                  counter.text = value;
                }
              }
            };
            animate();
          });
        }
      }, 800);
    }
  });
});

// Custom jQuery function to check if element is in the viewport
$.fn.isInViewport = function () {
  const elementTop = $(this).offset().top;
  const elementBottom = elementTop + $(this).outerHeight();

  const viewportTop = $(window).scrollTop();
  const viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
};

/** AJAX SECTION
$(document).on('click', '.tab-button', function (e) {
    e.preventDefault();
    const self = $(this);
    let action = $(this).attr('href');
    $('html,body').animate(
        {
            scrollTop: $('#cs-tabs__content').offset().top - 100,
        },
        'slow',
    );

    $('.section-loading').css({ display: 'block' });
    $('#cs-tabs__content').empty();
    $.ajax({
        type: 'GET',
        url: action,
        success: function (data) {
            data = JSON.parse(data);
            if ($.isEmptyObject(data.error)) {
                $('.case-study__title__sub').text(self.text());
                self.parent().find('.cs-tabs__btn-bar__item--active').removeClass('cs-tabs__btn-bar__item--active');
                self.addClass('cs-tabs__btn-bar__item--active');
                $('.cs-tabs__loading').css({ display: 'none' });
                $('#cs-tabs__content').empty();
                $('#cs-tabs__content').append(data.html);
                customCarousel();
                initSlider();
                AOS.init();
                // Create a new Swiper instance for the updated content
                csSwiper = new Swiper('.cs__swiper', {
                    slidesPerView: 1,
                    pagination: {
                        el: ".cs__swiper__nav",
                    }
                });
            } else {
                console.log(data.error);
            }
        },
    });
});
//*/
