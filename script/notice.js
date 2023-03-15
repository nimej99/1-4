// top버튼
    // 스크롤이 일정 값 이상일 때 TOP 버튼을 보이게 함
window.onscroll = function() {
scrollFunction();
};

function scrollFunction() {
if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 850) {
    document.getElementById("topBtn").style.display = "block";
} else {
    document.getElementById("topBtn").style.display = "none";
}
}

// 페이지 상단으로 이동하는 함수
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}


// 클릭시 모달창
