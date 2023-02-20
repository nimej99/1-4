// 헤더 GNB 마우스 오버 서식
let hBot = document.querySelector('#h_bot');
let lNb = document.querySelector('.lnb');

  hBot.addEventListener('mouseenter', function(){
    lNb.style.display='flex';
  });
  hBot.addEventListener('mouseleave', function(){
    lNb.style.display='none';
  });

// Lang Familysite
let selectTab = document.querySelector('.select_tab a');
let langCon = document.querySelector('.lang_con');
let fSite = document.querySelector('.f_site a');
let siteCon = document.querySelector('.site_con');


 selectTab.addEventListener('click', function(){
  langCon.classList.toggle('hidden');
 });
 fSite.addEventListener('click', function(){
  siteCon.classList.toggle('hidden');
 });
