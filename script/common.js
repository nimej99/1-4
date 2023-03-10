// 헤더 GNB 마우스 오버 서식
let header = document.querySelector('header');
let lNb = document.querySelector('.lnb');
let hoverBg = document.querySelector('#hover_bg');
let loGo = document.querySelector('#logo > a > img');

  header.addEventListener('mouseenter', function(){
    lNb.style.display='flex';
    hoverBg.style.display='block';
    hoverBg.style.opacity='1';
    loGo.setAttribute('src', './images/common/header.logo.hover.svg');
    langCon.classList.add('hidden');
    siteCon.classList.add('hidden');
  });
  header.addEventListener('mouseleave', function(){
    lNb.style.display='none';
    hoverBg.style.display='none';
    hoverBg.style.opacity='0';
    loGo.setAttribute('src', './images/common/header.logo.svg');
    langCon.classList.add('hidden');
    siteCon.classList.add('hidden');
    Lang.classList.remove('exid_180');
    familySite.classList.remove('exid_180');
  });

// Lang Familysite
let selectTab = document.querySelector('.select_tab a');
let langCon = document.querySelector('.lang_con');
let Lang = document.querySelector('.Lang');
let fSite = document.querySelector('.f_site a');
let siteCon = document.querySelector('.site_con');
let familySite = document.querySelector('.Familysite');


 selectTab.addEventListener('click', function(){
  langCon.classList.toggle('hidden');
  Lang.classList.toggle('exid_180');
  siteCon.classList.add('hidden');
  familySite.classList.remove('exid_180');
 });
 fSite.addEventListener('click', function(){
  siteCon.classList.toggle('hidden');
  familySite.classList.toggle('exid_180');
  langCon.classList.add('hidden');
  Lang.classList.remove('exid_180');
 });

 //메인이나 다른영역 클릭시 히든
 document.querySelector('main').addEventListener('click', function(){
  langCon.classList.add('hidden');
  siteCon.classList.add('hidden');
  Lang.classList.remove('exid_180');
  familySite.classList.remove('exid_180');
 });
 document.querySelector('#h_bot').addEventListener('click', function(){
  langCon.classList.add('hidden');
  siteCon.classList.add('hidden');
  Lang.classList.remove('exid_180');
  familySite.classList.remove('exid_180');
 });
 document.querySelector('#hover_bg').addEventListener('click', function(){
  langCon.classList.add('hidden');
  siteCon.classList.add('hidden');
  Lang.classList.remove('exid_180');
  familySite.classList.remove('exid_180');
 });
 document.querySelector('#burger').addEventListener('click', function(){
  langCon.classList.add('hidden');
  siteCon.classList.add('hidden');
  Lang.classList.remove('exid_180');
  familySite.classList.remove('exid_180');
 });
 

// 스크롤 방지
let gNb = document.querySelector('#gnb');
gNb.addEventListener('change', function(){
  if(gNb.checked==true){
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
      }
      
      // 페이지 상단으로 이동하는 함수
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      }
      
// // 가로너비로 측정해서 모바일 이동
// const isMobile = window.matchMedia("only screen and (max-width: 1024px)").matches;
// if (isMobile) {
// }
let href = document.location.href;
let cut_href = href.split('/', 3);
console.log(cut_href);
let cut_cut_href = 'm_'+cut_href;
console.log(cut_cut_href);