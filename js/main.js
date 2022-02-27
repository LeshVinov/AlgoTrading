$(document).ready(function () {
    const swiper = new Swiper('.swiper', {
        loop: true,
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      const secondSwiper = new Swiper('.swiper-second', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.lessons__swiper__button-next',
          prevEl: '.lessons__swiper__button-prev',
        },
      });
});