// 헤더 GNB 마우스 오버 서식
let header = document.querySelector('header');
let lNb = document.querySelector('.lnb');
let hoverBg = document.querySelector('#hover_bg');
let loGo = document.querySelector('#logo > a > img');

  header.addEventListener('mouseenter', function(){
    lNb.style.display='flex';
    hoverBg.style.display='block';
    loGo.setAttribute('src', './images/common/header.logo.hover.svg');
  });
  header.addEventListener('mouseleave', function(){
    lNb.style.display='none';
    hoverBg.style.display='none';
    loGo.setAttribute('src', './images/common/header.logo.svg');
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
