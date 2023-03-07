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

    //첫화면 텍스트 효과 스크롤값
    if(sPos>=960){
      $("#main_intro_txt, main_intro_txt02").hide();
    }else{
      $("#main_intro_txt").fadeIn(1000);
      $("#main_intro_txt02").fadeIn(2000);
    }

    //숫자 올라가게
    if(sPos>=937){
      // $(".intro").fadeIn(3000);
      // $('.count').each(function () {
      //   $(this).prop('Counter',0).animate({
      //       Counter: $(this).text()
      //   }, {
      //       duration: 500, // 2초 동안 애니메이션 효과 적용
      //       easing: 'swing',
      //       step: function (now) {
      //           $(this).text(Math.ceil(now));
      //       }
      //   });
      // });
    }else{
    }


    if(sPos>=1500){
      $('.mission_box').addClass('left_on');
      $('.vision_box').addClass('right_on');
    }else{
      $('.mission_box').removeClass('left_on');
      $('.vision_box').removeClass('right_on');
    }

  });
  

});




// const missionBox = document.querySelector('.mission_box');

// window.addEventListener('scroll', () => {
//   const scrollPosition = window.scrollY + window.innerHeight;
//   const missionBoxPosition = missionBox.offsetTop + missionBox.offsetHeight / 2;
  
//   if (scrollPosition > missionBoxPosition) {
//     missionBox.classList.add('show');
//   }
// });




// 왼쪽박스,  오른쪽 박스에 적용할 서식

// .left_on,   .right_on

// .left_on{
//  left:100px !important;
// }

// .right_on{
//  right:100px !important;
// }