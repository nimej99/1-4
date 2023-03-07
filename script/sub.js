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

  $(window).scroll(function(){
    let sPos = $(this).scrollTop();
    console.log(sPos);

    if(sPos>=0){
      $('#main_intro_txt').stop().fadeIn();
      $('#main_intro_txt02').stop().fadeIn(1000);
    }else if(sPos>=937){
      $('#intro_txt').stop().fadeIn();
    }
  });
});