$(document).ready(function () {
    const swiper = new Swiper('.swiper-benefits', {
        loop: true,
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      const secondSwiper = new Swiper(".lessons-swiper", {
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },},
          navigation: {
            nextEl: '.lessons-swiper-button-next',
            prevEl: '.lessons-swiper-button-prev',
          },
      });

      const thirdSwiper = new Swiper(".feedback-swiper", {
        loop: true,
      });

});