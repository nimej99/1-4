var swiper = new Swiper('.swiper-container', {
  autoplay: {
    delay: 3000, // 3초마다 자동 슬라이드
  },
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});