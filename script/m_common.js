

// 모바일 체크드 초기화
let toggleBtn = document.querySelector('#burger');
let siteCheck = document.getElementsByName('m_sitemap');
let introDesc = document.querySelector('#m_intro_desc');
let siteFirst = document.querySelector('#m_intro');
let langCheck = document.querySelector('#m_lang');


toggleBtn.addEventListener('click', function(){
    siteCheck.checked = false;
    siteFirst.checked = true;

    introDesc.checked = false;
    langCheck.checked = false;
});

let mGnb = document.querySelector('#m_gnb');
// 스크롤 방지
mGnb.addEventListener('change', function(){
  if(mGnb.checked==true){
      document.querySelector('body').style.overflowY = 'hidden';
  } else {
      document.querySelector('body').style.overflowY = '';
  }
});

//스크롤값
// top버튼
    // 스크롤이 일정 값 이상일 때 TOP 버튼을 보이게 함
    window.onscroll = function() {
        scrollFunction();
        };
        
        function scrollFunction() {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 850) {
            document.getElementById("top_btn").style.display = "block";
        } else {
            document.getElementById("top_btn").style.display = "none";
        }

        // 모바일 헤더 픽스드 일정 스크롤 내려올 시 헤더 백그라운드
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 850) {
            document.querySelector("header").style.background = "#444";
        } else {
            document.querySelector("header").style.background = "none";
        }
        }
        
        // 페이지 상단으로 이동하는 함수
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }


//100vh 버그 픽스

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);