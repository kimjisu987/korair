<!-- php 폴더에 regiupdate.php 회원정보를 입력하기 위한 문서 -->

<?php

  include("dbconn.php");
  date_default_timezone_set('Asia/Seoul');    // 서울 기준으로 서버 시간 설정

  $mb_id = trim($_POST['mb_id']);
  $mb_password = trim($_POST['mb_password']);
  $mb_name = trim($_POST['mb_name']);
  $mb_datetime = date('Y-m-d H:i:s', time());

  echo $mb_id . '<br>';
  echo $mb_password . '<br>';
  echo $mb_name . '<br>';
  echo $mb_datetime . '<br>';

  // 8.0 이하 구형 버전의 암호화 - 해킹 가능성이 있어 추천하지 않음
  $sql = "select PASSWORD('$mb_password') AS pass";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $mb_password = $row['pass'];

  // 8.0 이상 신형 버전의 해시암호화 - 추천
  // $mb_password = PASSWORD_HASH('$mb_password', PASSWORD_DEFAULT);

  // 변수값을 데이터 sql쿼리문을 작성하여 데이터베이스에 자료 입력한다.
  $sql  = "insert into
          korair_member(mb_id, mb_password, mb_name, mb_datetime)
          values('$mb_id', '$mb_password', '$mb_name', '$mb_datetime')";

  // 데이터베이스에 자료 입력한 결과를 변수에 담음
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.replace('login.php');</script>";
    exit;
  } else{
    echo "<script>alert('아이디와 비밀번호를 다시 확인해주세요.')</script>";
    echo "<script>history.back();</script>";
  }
  mysqli_close($conn);    // 데이터베이스 접속 종료
?>