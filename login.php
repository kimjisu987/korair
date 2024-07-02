<?php

  include("dbconn.php");

?>

  <!DOCTYPE html>
  <html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대한항공 - 로그인</title>

    <!-- 파비콘 -->
    <link rel="shortcut icon" type="image/jpg" href="./images/app_icon.jpg">
    <!-- 아이콘폰트(폰트어썸) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS 초기화 -->
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <!-- 공통 서식 -->
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <!-- 공통 서식 -->
    <link rel="stylesheet" href="css/login.css" type="text/css">
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
          <a href="login.php" title="로그인">로그인</a>
          <a href="#" title="전체메뉴"><i class="fa-solid fa-bars"></i></a>
        </div>
      </h1>
    </header>

    <main>
      <section>
        <h2>로그인</h2>
        <form name="login" method="post" action="login_check.php" onsubmit="return form_check();">
          <p><label for="mb_id">아이디</label></p>
          <p><input type="text" id="mb_id" name="mb_id"></p>

          <p><label for="mb_password">비밀번호</label></p>
          <p><input type="password" id="mb_password" name="mb_password"></p>

          <div class="save_box">
            <p>
              <input type="checkbox" id="id_save" name="id_save">
              <label for="id_save">아이디 저장</label>
            </p>
            <p>
              <a href="join.php" title="회원가입">회원가입 ></a>
            </p>
          </div>
          

          <p>
            <input type="submit" value="로그인" id="login_btn">
          </p>

          <p>
            <a href="index.php" title="메인화면으로">메인화면</a>
            <a href="id_search.php" title="아이디찾기">아이디찾기</a>
            <a href="pw_search.php" title="비밀번호찾기">비밀번호찾기</a>            
          </p>

          <div class="sns_login">
            <h3>다른 계정으로 로그인</h3>
            <a href="#" title="네이버 로그인">
              <img src="images/ico-naver.svg" alt="네이버">
              네이버
            </a>
            <a href="#" title="카카오 로그인">
              <img src="images/ico-kakao.svg" alt="카카오">
              카카오
            </a>
            <a href="#" title="구글 로그인">
              <img src="images/ico-google.svg" alt="구글">
              구글
            </a>
            <a href="#" title="페이스북 로그인">
              <img src="images/ico-facebook.svg" alt="페이스북">
              페이스북
            </a>
            <a href="#" title="애플 로그인">
              <img src="images/ico-apple.svg" alt="애플">
              Apple
            </a>
            
            <p class="login_help">
              <i class="fa-solid fa-key"></i>
              <a href="#" title="로그인 도움받기">로그인에 어려움이 있나요?</a>
            </p>
          </div>

          <div class="join_box">
            <h2>아직, 대한항공 회원이 아니세요?</h2>
            <p>회원으로 가입하시고<br>          마일리지 혜택을 누려 보세요.</p>
            <a href="join.php" title="회원가입">회원가입</a>
          </div>

        </form>
      </section>
    </main>
    
    <!-- 유효성 검사 -->
    <script>
      function form_check(){
        let id = document.getElementById('mb_id');
        let pw = document.getElementById('mb_password');

        if(id.value.length < 1){
          alert("아이디를 입력해주세요.");
          id.focus();
          return false;
        }
        if(pw.value.length < 1){
          alert("비밀번호를 입력해주세요.");
          pw.focus();
          return false;
        }
        return true;
      }
    </script>
  </body>
  </html>