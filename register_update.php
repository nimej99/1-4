<?php
  include('./db_conn.php'); //db연결을 위한 같은경로의 db_conn.php를 인클루드한다.

  $mode = $_POST['mode']; //포스트 방식으로 가져옴.

  if($mode != 'insert' && $mode != 'modify'){ //아무런 모드가 없다면 중단
    echo "<script>alert('mode 값이 제대로 넘어오지 않았습니다.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
  }

  switch ($mode) { //mode 의 값에 따라 회원가입, 회원수정이라는 제목으로 변경
    case 'insert' :
      $mb_id = trim($_POST['mb_id']);
      $title = '회원가입';
      break;
    case 'modify' :
      $mb_id = trim($_SESSION['ss_mb_id']);
      $title = '회원수정';
      break;
  }
  //사용자가 입력한 양식에 해당하는 값을 변수에 담아서 값이 있는지의 여부를 판단한다.
  $mb_password = trim($_POST['mb_password']); //패스워드
  $mb_name = trim($_POST['mb_name']); //이름
  $mb_datetime = date('Y-m-d H:i:s', time()); //가입일
  $mb_modify_datetime = date('Y-m-d H:i:s', time()); //수정일

  //사용자가 입력한 데이터에 대해 입력여부를 판단하는 if문 작성
  if(!$mb_id){
    echo "<script>alert('아이디가 넘어오지 않았습니다.');</script>";
    echo "<script>loaction.replace('./register.php');</script>";
    exit; //자바스크립트 return
  }
  if(!$mb_password){
    echo "<script>alert('비밀번호가 넘어오지 않았습니다.');</script>";
    echo "<script>loaction.replace('./register.php');</script>";
    exit; //자바스크립트 return
  }
  if(!$mb_name){
    echo "<script>alert('이름이 넘어오지 않았습니다.');</script>";
    echo "<script>loaction.replace('./register.php');</script>";
    exit; //자바스크립트 return
  }

  //데이터베이스
  // $sql = "SELECT CONCAT('*', UPPER(SHA1(UNHEX(SHA1('$mb_password'))))) AS pass"; //입력한 비밀번호를 mysql password() 함수를 이용하여 암호화해서 가져옴.

  // $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_assoc($result);
  // $mb_password = $row['pass'];
  // 데이터베이스
  $hased_PW = password_hash($mb_password, PASSWORD_DEFAULT); //입력한 비밀번호를 암호화
  $mb_password = $hased_PW;

  if($mode == 'insert'){ //회원가입 상태
    //회원가입을 시도하는 아이디가 사용중
    $sql = "SELECT * FROM member WHERE mb_id = '$mb_id'";

    $result = mysqli_query($conn, $sql); //결과값을 다시 저장한다.

    if(mysqli_num_rows($result)>0){ //사용중인 아이디값이 있는 행이 있다면
      echo("<script>alert('이미 사용중인 아이디가 있습니다.');</script>");
      echo("<script>location.replace('./register.php');</script>");
      exit;
    }
    //최종 검사결과가 끝났으니 데이터베이스에 자료를 하나씩 입력한다.
    $sql = "insert into member
    set mb_id = '$mb_id',
    mb_password = '$mb_password',
    mb_email = '$mb_email',
    mb_name = '$mb_name',
    mb_gender = '$mb_gender',
    mb_job = '$mb_job',
    mb_ip = '$mb_ip',
    mb_language = '$mb_language',
    mb_datetime = '$mb_datetime'";
    
    $result = mysqli_query($conn, $sql); //입력실행
  }else if($mode == 'modify'){
    $sql = "update member
    set mb_id = '$mb_id',
    mb_password = '$mb_password',
    mb_email = '$mb_email',
    mb_name = '$mb_name',
    mb_gender = '$mb_gender',
    mb_job = '$mb_job',
    mb_ip = '$mb_ip',
    mb_language = '$mb_language',
    mb_datetime = '$mb_modify_datetime'
    where mb_id = '$mb_id'";
    
    
    $result = mysqli_query($conn, $sql); //입력실행
  }
  if($result){
    echo "<script>alert('".$title."이 완료 되었습니다.');</script>";
    echo "<script>location.replace('./login.php')</script>";
    exit;
  }else{
    echo "가입 실패 : " , mysqli_error($conn);
    mysqli_close($conn); //데이터베이스 접속종료
  }
?>