<?php
include('./db_conn.php');
header("Content-Type: text/html; charset=UTF-8");

$mb_id = $_POST['mb_id'] ?? '';
$md_password = $_POST['mb_password'] ?? '';


// 입력값 확인
if(!$mb_id || !$md_password) {
  echo "<script>alert('아이디 또는 비밀번호를 입력해주세요.'); location.replace('./login.php');</script>";
  exit;
}

// 사용자의 ID를 먼저 조회하기
$sql = "SELECT * FROM member WHERE mb_id = '$mb_id'";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

// 사용자의 ID가 없을 경우
if(!$mb['mb_id']) {
  echo "<script>alert('일치하는 아이디가 없습니다.'); location.replace('./login.php');</script>";
  exit;
} else {
  // 비밀번호 확인
  //password_verify(입력값, DB값) : 입력값과 DB값이 일치하면 true, 아니면 false (복호화 기능도 포함)
  if (!password_verify($md_password, $mb['mb_password'])) { // 로그인 실패
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); location.replace('./login.php');</script>";
    exit;
  } else { // 로그인 성공
    $_SESSION['ss_mb_id'] = $mb_id;
    echo "<script>alert('로그인 되었습니다.');</script>";
    echo "<script>location.replace('./login.php');</script>";
    mysqli_close($conn);
    exit;
  }
}

?>