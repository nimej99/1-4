$(function(){

  // 스크롤 버튼 클릭시 아래 내용으로 이동
  $('#down_btn').click(function(){
    $('html, body').animate({scrollTop:$('.intro').offset().top-0},500,'easeOutQuint');
  });

  //원형내비게이션 클릭시 해당 콘텐츠로 이동

  let mnu_n = $('#m_nav li')

  mnu_n.click(function(){
    let n = $(this).index();
    // console.log(n);

    $('html, body').animate({scrollTop:$('section').eq(n+1).offset().top-0},500);
    return false;
  });

  // 첫화면 텍스트 효과
  $("#main_intro_txt").fadeIn(1000);
  $("#main_intro_txt02").fadeIn(2000);
  
  $(window).scroll(function(){
    let sPos = $(this).scrollTop();
    console.log(sPos);

    if(sPos>=937){
      $(".intro").fadeIn(3000);
      $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000, // 2초 동안 애니메이션 효과 적용
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
      });
    }else{
    }
  });
  

});

const missionBox = document.querySelector('.mission_box');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY + window.innerHeight;
  const missionBoxPosition = missionBox.offsetTop + missionBox.offsetHeight / 2;
  
  if (scrollPosition > missionBoxPosition) {
    missionBox.classList.add('show');
  }
});