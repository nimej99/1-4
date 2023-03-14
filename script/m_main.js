var swiper = new Swiper('.swiper-container', {
  autoplay: {
    delay: 3000, // 3초마다 자동 슬라이드
    disableOnInteraction: false, // false-스와이프 후 자동 재생
  },
  loop : true,   // 슬라이드 반복 여부
  loopAdditionalSlides : 1,
  pagination: {
    el: '.swiper-pagination',
    clickable: true, // 버튼 클릭 여부
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

//체크드 초기화
let tabFirst = document.querySelector('#g_check');

toggleBtn.addEventListener('click', function(){
    tabFirst.checked = true;
});