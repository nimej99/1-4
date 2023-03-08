// 모바일 체크드 초기화
let toggleBtn = document.querySelector('#burger');
let siteCheck = document.getElementsByName('m_sitemap');
let introDesc = document.querySelector('#m_intro_desc');
let siteFirst = document.querySelector('#m_intro');

let tabCheck = document.getElementsByName('tac_check');
let tabFirst = document.querySelector('#g_check');

toggleBtn.addEventListener('click', function(){
  for(let c=0; c < siteCheck.length; c++){
    siteCheck[c].checked = false;
    siteFirst.checked = true;

    tabCheck[c].checked = false;
    tabFirst.checked = true;

    introDesc.checked = false;
  }
});