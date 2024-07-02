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
  <meta name="keywords" content="대한항공, 항공예약, 여행">
  <meta name="Description" content="여행 좌석예약, 국내여행, 해외여행, 편도 좌석 예약">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예약">
  <meta http-equiv="Title" content="대한항공">
  <title>대한항공-모바일웹(앱)</title>
  <!-- 스와이퍼 CSS 서식 -->
  <link rel="stylesheet" href="css/swiper.css" type="text/css">
  <!-- 아이콘폰트(폰트어썸) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <!-- 파비콘 -->
  <link rel="shortcut icon" type="image/jpg" href="./images/app_icon.jpg">
  <!-- CSS 초기화 -->
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <!-- 공통 서식 -->
  <link rel="stylesheet" href="css/common.css" type="text/css">
  <!-- 메인 서식 -->
  <link rel="stylesheet" href="css/main.css" type="text/css">

  <!-- 제이쿼리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
  <!-- 헤더영역 -->
  <header>

    <!-- 토글버튼 클릭시 nav 나오게 하기
      1. css로 체크박스에 체크하면 nav 나오게 하기
      2. javascript 또는 jquery로 span태그(toggle 아이콘) 클릭시 nav 나오게 하기
    -->
    <a href="#" title="전체메뉴" class="toggle">전체메뉴</a>
    <div class="gnb">

      <?php if(isset($mb_id)){ ?>
      <div class="logout"><a href="logout.php" title="로그아웃">로그아웃</a></div>
      <?php } else{ ?>
      <div class="logout"></div>
      <?php };?>

      <ul class="gnb_nav">
        <li>
          <a href="#" title="메뉴1">메뉴1<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
        <li>
          <a href="#" title="메뉴2">메뉴2<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
        <li>
          <a href="#" title="메뉴3">메뉴3<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
        <li>
          <a href="#" title="메뉴4">메뉴4<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
        <li>
          <a href="#" title="메뉴5">메뉴5<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
        <li>
          <a href="#" title="메뉴6">메뉴6<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
        <li>
          <a href="#" title="메뉴7">메뉴7<i class="fas fa-angle-down"></i></a>
          <ul class="lnb">
            <li><a href="#" title="세부메뉴1">세부메뉴1</a></li>
            <li><a href="#" title="세부메뉴2">세부메뉴2</a></li>
            <li><a href="#" title="세부메뉴3">세부메뉴3</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="t_back">
      <a href="#" title="닫기" class="c_btn">닫기</a>
    </div>

    <h1>
      <a href="index.php" title="상단 로고">
        <img src="images/txt_logo.png" alt="상단로고">
      </a>
    </h1>

    <?php if(isset($mb_id)){ ?>
    <span class="log_btn"><strong><?php echo $mb_id ?></strong> 님<br>환영합니다</span>
    <?php } else{ ?>
    <a href="login.php" title="로그인" class="login_btn">로그인하기</a>
    <?php };?>
  </header>

  <!-- 메인영역 -->
  <main>
    <div class="container">

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#" title="입주자 모집">
              <img src="images/banner01.jpg" alt="이벤트 배너">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" title="입주자 모집">
              <img src="images/banner02.jpg" alt="이벤트 배너">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" title="입주자 모집">
              <img src="images/banner03.jpg" alt="이벤트 배너">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" title="입주자 모집">
              <img src="images/banner04.jpg" alt="이벤트 배너">
            </a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <a href="#" title="국내선 예매"><img src="images/m_img01.jpg" alt="국내선 예매"></a>
      <a href="#" title="국제선 예매"><img src="images/m_img02.jpg" alt="국제선 예매"></a>
      <a href="#" title="예약 관리"><img src="images/m_img03.jpg" alt="예약 관리"></a>
      <a href="#" title="체크인"><img src="images/m_img04.jpg" alt="체크인"></a>
      <a href="#" title="스케줄/출도착"><img src="images/m_img05.jpg" alt="스케줄/출도착"></a>
    </div>
    <div class="skypass">
      <a href="탑승권 조회"><img src="images/skypass.jpg" alt="탑승권 조회"></a>      
    </div>
  </main>

  <!-- 푸터영역 -->
  <footer>
    <div class="f_btn">
      <a href="#" title="개인정보취급방침"><strong>개인정보취급방침</strong></a>
      <a href="#" title="PC버전보기">PC버전보기</a>
      <a href="#" title="앱다운로드">앱다운로드</a>
    </div>
    <address>
      Copyright 2022 KOREAN AIR Allrights reserved.<br>사업자등록번호 0000-000-0000 통신판매업 신고번호 : 강서 제00-000
    </address>
  </footer>

  <!-- 스와이퍼 스크립트 -->
  <script src="script/swiper.js"></script>
  <!-- 슬라이드 스크립트 -->
  <script>
    let swiper = new Swiper(".mySwiper", {
      slidesPerView: 'auto',
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      // autoHeight : true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

  <!-- 토글메뉴 -->
  <script>
    $(document).ready(function() {
      let toggle = $('header .toggle');
      let gnb = $('header .gnb');
      let c_btn = $('.c_btn');
      let toggle_back = $('.t_back');
      toggle_back.hide();
  
      toggle.click(function(){
        gnb.animate({'left':'0px'}, 200, 'linear');
        toggle_back.show();
        $('body').css('overflow','hidden');
      });

      toggle_back.click(function(){
        gnb.animate({'left':'-70%'}, 200, 'linear');
        toggle_back.hide();
        $('body').css('overflow','auto');
      })
    });
  </script>

  <!-- 내비게이션 lnb 메뉴 -->
  <script>
    $(document).ready(function(){
      let gnb = $('.gnb_nav > li > a');
      
      gnb.click(function(){
        // 다른 gnb_nav 메뉴의 아이콘을 모두 fa-angle-down으로 설정
        $('.gnb_nav > li > a').not(this).find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
        
        // 클릭한 gnb의 아이콘을 토글 (fa-angle-up 또는 fa-angle-down)
        $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
        
        // 다른 gnb_nav 메뉴의 lnb 닫기
        $('.gnb_nav > li > a').not(this).next().slideUp();
        
        // 클릭한 gnb의 lnb 열기
        $(this).next().slideToggle();
      })
    })
  </script>
</body>
</html>