// 메인 슬라이드 서식

let ctrl_btn = document.querySelectorAll('.ctrl_btn');
let m_slider_list = document.querySelectorAll('.m_slider_list > li');
let prev_btn = document.querySelector('.prev');
let next_btn = document.querySelector('.next');
let img_progress = document.querySelectorAll('.bar');

let s_num = 0; //현재 슬라이드 페이지
let temp = 0; //임시
let duration = 5000; //딜레이

let Timer = setInterval(slideProgress, 10); // 반복
let fadeInJSInterval;