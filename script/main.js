// // 메인 슬라이드 서식

// let ctrl_btn = document.querySelectorAll('.ctrl_btn > li');
// let m_slider_list = document.querySelectorAll('.m_slider_list > li');
// let prev_btn = document.querySelector('.prev');
// let next_btn = document.querySelector('.next');
// let img_progress = document.querySelectorAll('.ctrl_btn > li > span');

// let s_num = 0; //현재 슬라이드 페이지
// let temp = 0; //임시
// let duration = 5000; //딜레이

// let Timer = setInterval(slideProgress, 10); // 반복
// let fadeInJSInterval;

// function pureGetIndex(el){
//   let num = 0;
//   let elArr = el.parentNode.childNodes;
//   for(let i = 0; i < elArr.length; i++){
//     if(el == elArr[i]) return num;
//     if(elArr[i].nodeType==1) num++;
//   }
//   return -1;
// }

// function slideProgress(){
//   img_progress[s_num].classList.add('fadeIn');
//   img_progress[s_num].classList.add('play');
//   fadeInJS();
//   slideRight();
// };

// function fadeInJS() {
//   let element = m_slider_list[s_num];
//   element.classList.add('fadeIn');
//   element.classList.remove('fadeOut');
//   let bar_list = img_progress[s_num];
//   bar_list.classList.add('fadeIn');
//   bar_list.classList.remove('fadeOut');
//   for(list of m_slider_list){
//     if(list != element) list.classList.add('fadeOut');
//   }
//   for(progress of bar_list){
//     if(progress != bar_list) progress.classList.add('fadeOut');
//   }
// }

// function fadeOutJS() {
//   for(list of m_slider_list) list.classList.remove('fadeIn');
//   for(progress of bar_list) progress.classList.remove('fadeIn');
// }

// function slideLeft() {
//   img_progress[s_num].classList.add('fadeIn');
//   img_progress[s_num].classList.add('play');
//   fadeOutJS();
//   if(s_num-1 < 0){
//     s_num = m_slider_list.length-1;
//   } else {
//     s_num--;
//   }
//   clearInterval(Timer);
//   Timer = setInterval(slideProgress, 5000);
// }

// function slideRight() {
//   img_progress[s_num].classList.add('fadeIn');
//   img_progress[s_num].classList.add('play');
//   fadeOutJS();
//   if(s_num+1 > m_slider_list.length-1){
//     s_num = 0;
//   } else {
//     s_num++;
//   }
//   clearInterval(Timer);
//   Timer = setInterval(slideProgress, 5000);
// }

// function slideSelect() {
//   img_progress[s_num].classList.add('fadeIn');
//   img_progress[s_num].classList.add('play');
//   fadeOutJS();
//   s_num = pureGetIndex(this);
//   clearInterval(Timer);
//   Timer = setInterval(slideProgress, 5000);
// }