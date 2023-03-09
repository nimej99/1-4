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
  
  // 스크롤 함수
  $(window).scroll(function(){
    let sPos = $(this).scrollTop();

    //첫화면 텍스트 효과 스크롤값
    if(sPos>=937){
      $("#main_intro_txt, main_intro_txt02").hide();
    }else{
      $("#main_intro_txt").fadeIn();
      $("#main_intro_txt02").fadeIn();
    }

    //숫자 올라가게
    if(sPos>=900 && sPos<=1875){
      const counter = ($counter, max) => {
        let now = max;
      
        const handle = setInterval(() => {
          $counter.innerHTML = Math.ceil(max - now);
        
          // 목표수치에 도달하면 정지
          if (now < 1) {
            clearInterval(handle);
          }
          
          // 증가되는 값이 계속하여 작아짐
          const step = now / 10;
          
          // 값을 적용시키면서 다음 차례에 영향을 끼침
          now -= step;
        }, 50);
      }
      
    if(sPos>=900 && sPos<=1875) {
        // 카운트를 적용시킬 요소
        const $counter1 = document.querySelector(".count1");
        const $counter2 = document.querySelector(".count2");
        const $counter3 = document.querySelector(".count3");
        const $counter4 = document.querySelector(".count4");
        const $counter5 = document.querySelector(".count5");
        
        // 목표 수치
        const max1 = 1971;
        const max2 = 22007;
        const max3 = 1112;
        const max4 = 502;
        const max5 = 71;
        
        setTimeout(() => counter($counter1, max1), 2000);
        setTimeout(() => counter($counter2, max2), 2000);
        setTimeout(() => counter($counter3, max3), 2000);
        setTimeout(() => counter($counter4, max4), 2000);
        setTimeout(() => counter($counter5, max5), 2000);
      }
    }

    // 비전과 미션 박스 날아오게
    if(sPos>=1870 && sPos<=3200){
      $('.mission_box').addClass('left_on');
      $('.vision_box').addClass('right_on');
    }else{
      $('.mission_box').removeClass('left_on');
      $('.vision_box').removeClass('right_on');
    }

     // 연혁 불 들어오게
    if(sPos>=3250){
      $('.history > article > dl > dt:first-of-type div').addClass('history_on');
      $('.history > article > dl > dt:first-of-type').addClass('txt_on');
    }
    
    
    //전략목표 텍스트 fadIn, click시 숨겨진 박스 나타나게 하기
    if(sPos>=5100 && sPos<=6100){
      $("#v_box").fadeIn();
      $("#m_btn1,.strategy>article>ul>li:first-child>img").click(function(){
      $("#m_box1").css('display','block');
      });
      $("#h_btn1, .strategy>article>ul>li:first-child>#m_box1").click(function(){
      $("#m_box1").css('display','none');
      });

      $("#m_btn2, .strategy>article>ul>li:nth-child(2)>img").click(function(){
      $("#m_box2").css('display','block');
      });
      $("#h_btn2, .strategy>article>ul>li:nth-child(2)>#m_box2").click(function(){
      $("#m_box2").css('display','none');
      });

      $("#m_btn3,.strategy>article>ul>li:last-child>img").click(function(){
      $("#m_box3").css('display','block');
      });
      $("#h_btn3, .strategy>article>ul>li:last-child>#m_box3").click(function(){
      $("#m_box3").css('display','none');
      });
    }
  });
});


