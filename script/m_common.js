// 모바일 체크드 초기화
let toggleBtn = document.querySelector('#burger');
let siteCheck = document.getElementsByName('m_sitemap');
let introDesc = document.querySelector('#m_intro_desc');
let siteFirst = document.querySelector('#m_intro');

let tabCheck = document.getElementsByName('tac_check');
let tabFirst = document.querySelector('#g_check');

toggleBtn.addEventListener('click', function(){
    siteCheck.checked = false;
    siteFirst.checked = true;

    tabCheck.checked = false;
    tabFirst.checked = true;

    introDesc.checked = false;
});

let mGnb = document.querySelector('#m_sitemap');
// 스크롤 방지
mGnb.addEventListener('change', function(){
  if(mGnb.checked==true){
      document.querySelector('body').style.overflowY = 'hidden';
  } else {
      document.querySelector('body').style.overflowY = '';
  }
});

// 피시버전 돌아가기
const isPc = window.matchMedia("only screen and (min-width: 767px)").matches;
if (isPc) {
    let href = document.location.href;
    let cut_href = href.split('/');
    let cut2 = cut_href[4];
    let cut3 = cut2.split('_');
        console.log(cut3[1]);
        location.href='http://youjy12.dothome.co.kr/1-4/'+cut3[1];
    }