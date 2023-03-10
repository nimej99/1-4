
$(function(){
  
  let historyOn = false; // 스크롤 on off 체크

  // 스크롤 버튼 클릭시 아래 내용으로 이동
  $('#down_btn').click(function(){
    $('html, body').animate({scrollTop:$('.intro').offset().top-0},500,'easeOutQuint');
  });

  //원형내비게이션 클릭시 해당 콘텐츠로 이동 및 클릭시 해당 SPAN 배경색 변경

  let mnuN = $('#m_nav li')

    mnuN.click(function(){
    let n = $(this).index();
    // console.log(n);

    $('nav#m_nav ul li span').css('background-color', '#7B7B7B');
    $(this).find('span').css('background-color', '#008177');
    $('html, body').animate({scrollTop:$('section').eq(n+1).offset().top-0},500);
    return false;
  });

  // 첫화면 텍스트 효과
  $("#main_intro_txt").fadeIn(2000);
  $("#main_intro_txt02").fadeIn(3000);
  
  // 스크롤 함수
  $(window).scroll(function(){
    let sPos = $(this).scrollTop();
    console.log(sPos);

    //첫화면 텍스트 효과 스크롤값
    if(sPos>=936){
      $("#main_intro_txt, #main_intro_txt02").hide();
    }else{
      $("#main_intro_txt").fadeIn(2000);
      $("#main_intro_txt02").fadeIn(3000);
    }

    //숫자 올라가게
    if(sPos>=665 && sPos<=1870){
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
      $('#m_nav li').find('span').eq(0).css('background-color', '#008177');  

      
    if(sPos>=930 && sPos<=1870) {
        // 카운트를 적용시킬 요소
        const $counTer1 = document.querySelector(".count1");
        const $counTer2 = document.querySelector(".count2");
        const $counTer3 = document.querySelector(".count3");
        const $counTer4 = document.querySelector(".count4");
        const $counTer5 = document.querySelector(".count5");
        
        // 목표 수치
        const mAx1 = 1971;
        const mAx2 = 22007;
        const mAx3 = 1112;
        const mAx4 = 502;
        const mAx5 = 71;
        
        setTimeout(() => counter($counTer1, mAx1), 2000);
        setTimeout(() => counter($counTer2, mAx2), 2000);
        setTimeout(() => counter($counTer3, mAx3), 2000);
        setTimeout(() => counter($counTer4, mAx4), 2000);
        setTimeout(() => counter($counTer5, mAx5), 2000);
      }
    }else{
      $('#m_nav li').find('span').eq(0).css('background-color', '#7B7B7B');
    }

    // 비전과 미션 박스 날아오게
    if(sPos>=1874 && sPos<=3200){
      $('.mission_box').addClass('left_on');
      $('.vision_box').addClass('right_on');
      $('#m_nav li').find('span').eq(1).css('background-color', '#008177');
      // $('body').css('overflow-x','hidden');
    }else{
      $('.mission_box').removeClass('left_on');
      $('.vision_box').removeClass('right_on');
      $('#m_nav li').find('span').eq(1).css('background-color', '#7B7B7B');
      // $('body').css('overflow-x','auto');
    }
    

     // 연혁 불 들어오게
    if(sPos>=3260 && sPos<=5100){
      let dtIdx = 0;
      const dtCount = $('.history > article > dl > dt').length; // dt 요소의 총 개수
      
      if(historyOn == false) { //초기값 false line 2 에서 확인가능
        historyOn = true; // true로 변경 (if문을 한번만 실행하기 위해서)
        let historyInterval = setInterval(() => {
          // 현재 선택된 dt 요소에서 클래스를 삭제
          $('.history > article > dl > dt').stop().eq(dtIdx).find('div').removeClass('history_on');
          $('.history > article > dl > dt').stop().eq(dtIdx).removeClass('txt_on');
        
          // 다음 dt 요소의 인덱스 계산
          dtIdx = (dtIdx + 1) % dtCount; // 0, 1, 2, 3, 4 ~ 0, 1, 2, 3, 4 반복
          if(dtIdx == dtCount - 1) clearInterval(historyInterval); // 4에 걸칠시 interval 지움
        
          // 다음 dt 요소에 클래스를 추가
          $('.history > article > dl > dt').stop().eq(dtIdx).find('div').addClass('history_on');
          $('.history > article > dl > dt').stop().eq(dtIdx).addClass('txt_on');
        }, 2000);
      }
      $('#m_nav li').find('span').eq(2).css('background-color', '#008177');
    }else{
      $('#m_nav li').find('span').eq(2).css('background-color', '#7B7B7B');
    }
    
    
    //전략목표 텍스트 fadIn, click시 숨겨진 박스 나타나게 하기
    if(sPos>=5100 && sPos<=6100){
      $("#v_box01, #v_box02, #v_box03").fadeIn();
      $("#m_btn1,.strategy>article>ul>li:first-child>img").click(function(){
      $("#m_box1").css('top','50%');
      });
      $("#h_btn1, .strategy>article>ul>li:first-child>#m_box1").click(function(){
      $("#m_box1").css('top','150%');
      });

      $("#m_btn2, .strategy>article>ul>li:nth-child(2)>img").click(function(){
      $("#m_box2").css('top','50%');
      });
      $("#h_btn2, .strategy>article>ul>li:nth-child(2)>#m_box2").click(function(){
      $("#m_box2").css('top','-100%');
      });

      $("#m_btn3,.strategy>article>ul>li:last-child>img").click(function(){
      $("#m_box3").css('top','50%');
      });
      $("#h_btn3, .strategy>article>ul>li:last-child>#m_box3").click(function(){
      $("#m_box3").css('top','150%');
      });
      $('#m_nav li').find('span').eq(3).css('background-color', '#008177');
    }else{
      $('#m_nav li').find('span').eq(3).css('background-color', '#7B7B7B');
    }

    if(sPos>=6170 && sPos<=7080){
      $('#m_nav li').find('span').eq(4).css('background-color', '#008177');
    }else{
      $('#m_nav li').find('span').eq(4).css('background-color', '#7B7B7B');
    }

    if(sPos>=7082){
      $('#m_nav li').find('span').eq(5).css('background-color', '#008177');
    }else{
      $('#m_nav li').find('span').eq(5).css('background-color', '#7B7B7B');
    }
  });

  // 모달창 띄우기
  $('.video_box, .play_btn').click(function(){
    const moDal = `
    <div class="modal">
      <div class="modal_wrap">
      <img src="./images/sub/close_btn.png" alt="닫기버튼" id="c_btn">
        <div class="left_box">
        <iframe src="https://www.youtube.com/embed/mJwVPKbKq_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="right_box">
        <h3>하나금융그룹 홍보영상</h3>
        <p>자산관리의 리더 하나금융그룹<br>
        자산관리의 리더로서 손님의 소중한 자산을 위해 스스로 이룬 혁신을 다시 넘어서고 손님의 더 큰 만족을 위해 차별화된 기술을 더하는 자산관리의 리더 하나금융그룹
        <br>
        <br>
        글로벌리더 하나금융그룹<br>
        글로벌 리더로서 세계 속에서 앞서가는 금융이 되기 위해 어제의 자신과 경쟁하고 대한민국 금융의 네트워크를 지구 반대편까지 넓혀가는 글로벌 리더 하나금융그룹
        <br>
        <br>
        상생의 리더 하나금융그룹<br>
        상생의 리더로서 함께 성장하기 위해 늘 힘이 되어 주고 모두의 행복을 위해 끊임없이 다가가는 상생의 리더 하나금융그룹
        <br>
        <br>
        오늘보다 내일 더 앞서가기 위해 하나금융그룹은 하나금융그룹과 경쟁하고 있습니다.</p>
        </div>
      </div>
    </div>
    `

    //body태그의 안쪽 맨뒤에 내용을 추가한다.
    $('body').append(moDal);
    $('body').css('overflow', 'hidden');
    $('#top_btn').css('z-index', '1');

    $('.modal:not(.left_box,.right_box), #c_btn').click(function(e){
        $('.modal').hide();
        $('body').css('overflow','auto');
    });
  });
});


