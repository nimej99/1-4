$(function(){

  $('#down_btn').click(function(){
    $('html, body').animate({scrollTop:$('.intro').offset().top-70},500,'easeOutQuint');
  });

  //원형내비게이션 클릭시 해당 콘텐츠가 상단으로 올라오게 하기
  let mnu_n = $('#m_nav li')

  mnu_n.click(function(){
    let n = $(this).index();
    console.log(n);

  });
});