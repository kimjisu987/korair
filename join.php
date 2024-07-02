<?php

  include("dbconn.php");
  if(isset($_SESSION['ss_mb_id'])){
    $mb_id = $_SESSION['ss_mb_id'];
  } 

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대한항공 - 회원가입</title>

  <!-- 파비콘 -->
  <link rel="shortcut icon" type="image/jpg" href="./images/app_icon.jpg">
  <!-- 아이콘폰트(폰트어썸) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- CSS 초기화 -->
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <!-- 공통 서식 -->
  <link rel="stylesheet" href="css/common.css" type="text/css">
  <!-- 로그인 서식 -->
  <link rel="stylesheet" href="css/join.css" type="text/css">

  <!-- 제이쿼리 라이브러리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- 제이쿼리를 이용한 비동기통신 -->
  <script>
    $(document).ready(function(){
      // 중복확인 클릭으로 한다면 중복확인에 click 이벤트로 실행
      // $('#btn').on('click', function(){

      // });
      // id에 키보드를 누르면 바로 함수가 실행됨 (keyup)
      $('#mb_id').on('keyup', function(){
        let self = $(this);
        let mb_id;

        // self(#mb_id) == 아이디 입력폼에 id 값이 일치하면
        if(self.attr("id") == "mb_id"){
          // 입력한 값(val)을 변수(mb_id)에 담는다.
          mb_id = self.val();
        }
        $.post(
          "id_check.php",   // 일치하는 값을 찾는 별도의 문서를 만들어서 넣어준다
          {mb_id:mb_id},    // 값을 변수에 담아준다.
          function(data){
            if(data){   // 만약에 데이터 값이 전송이 된다면
              self.parent().parent().find('span').html(data);    // #mb_id의 부모의 부모에서 div를 찾아서 data 값을 입력한다.
              self.parent().parent().find('span').addClass('id_check');
            }
          }
        )
      })
    });
  </script>

</head>
<body>
  <!-- 헤더 -->
  <header>
    <h1>
      <a href="index.php" title="메인으로 바로가기">
        <img src="images/txt_logo.png" alt="메인로고">
      </a>
      <div>
        <a href="#" title="검색"><i class="fa-solid fa-magnifying-glass"></i></a>

        <?php if(isset($mb_id)){ ?>
          <a href="index.php" title="홈">홈</a>
        <?php } else{ ?>
          <a href="login.php" title="로그인">로그인</a>
        <?php };?>

        <a href="#" title="전체메뉴"><i class="fa-solid fa-bars"></i></a>
      </div>
    </h1>
  </header>

  <main>
    <section>
      <h2>회원가입</h2>
      <form action="regiupdate.php" name="join" method="post" onsubmit="return form_check();">
        <!-- no, mb_id, mb_password, mb_name, mb_date -->
        <p>
          <label for="mb_id">아이디</label>
          <input type="text" id="mb_id" name="mb_id" maxlength="16" placeholder="아이디를 입력해주세요">
          <span id="id_check" class="id_check"></span>
        </p>

        <p>
          <label for="mb_password">패스워드</label>
          <input type="password" id="mb_password" name="mb_password" maxlength="255" placeholder="비밀번호를 입력해주세요">
        </p>

        <p>
          <label for="mb_name">이름</label>
          <input type="text" id="mb_name" name="mb_name" maxlength="16" placeholder="이름을 입력해주세요">
        </p>

        <p class="btn_box">
          <input type="reset" value="취소" id="reset_btn" onclick="history.back();">
          <input type="submit" value="회원가입" id="sub_btn">
        </p>
      </form>
    </section>
  </main>

  <!-- 유효성 검사 -->
  <script>
    function form_check(){
      let id = document.getElementById('mb_id');
      let pw = document.getElementById('mb_password');
      let name = document.getElementById('mb_name');

      if(id.value.length < 1){
        alert("아이디를 입력해주세요");
        id.focus();
        return false;
      }
      if(pw.value.length < 1){
        alert("패스워드를 입력해주세요");
        pw.focus();
        return false;
      }
      if(name.value.length < 1){
        alert("이름를 입력해주세요");
        name.focus();
        return false;
      }
      return true;
    }
  </script>
</body>
</html>