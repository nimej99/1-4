<?php
//db_conn.php : 데이터베이스에 접근하기 위한 문서

//변수
$mysql_host = 'localhost';
$mysql_user = 'youjy12';
$mysql_password = "dlftjrtkwh1!!";
$mysql_db = "youjy12";

//데이터베이스에 연결하는 변수
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){//연결이 오류 발생시 스크립트를 종료한다.
  die('연결실패 :'.mysqli_connect_error());

}

session_start(); //세션의 시작

?>


