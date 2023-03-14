<?php
 include('./db_conn.php'); //db연결을 위한 같은 경로의 db_conn.php 를 인클루드한다.(import 느낌)
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>하나금융그룹</title>
  <!-- 파비콘 -->
  <link rel="shortcut icon" type="image/x-icon" href="./images/common/favicon.ico">
  <!-- 초기화 -->
  <link rel="stylesheet" href="./css/css_reset.css" type="text/css">
  <!-- 기본서식 -->
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <!-- 공통서식 -->
  <link rel="stylesheet" href="./css/m_common.css" type="text/css">
  <!-- 로그인서식 -->
  <link rel="stylesheet" href="./css/m_login.css" type="text/css">
  <!-- 폰트어썸CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- script 영역 -->
  <script src="./script/m_common.js" defer></script>
</head>
<body>
  <!-- 헤더영역 서식 -->
  <header>
    <input type="checkbox" id="m_lang" class="hidden">
    <input type="checkbox" id="m_gnb" class="hidden">
    <div id="m_header_wrap" class="flex">

      <h1>
        <a href="m_index.html" title="모바일메인바로가기">
        </a>
      </h1>

      <div class="m_lang_tab flex">
        <label for="m_lang">
        </label>
        <div class="m_lang_con hidden">
          <a href="#none" title="KOR">KOR</a>
          <a href="#none" title="ENG">ENG</a>
          <a href="#none" title="JPN">JPN</a>
          <a href="#none" title="CHN">CHN</a>
        </div>
      </div>

      <!-- 토글버튼 서식 -->
      <label id="burger" for="m_gnb">
        <span class="burger1">&nbsp;</span>
        <span class="burger2">&nbsp;</span>
        <span class="burger3">&nbsp;</span>
      </label>

      <div id="m_sitemap" class="hidden">
        <input type="radio" name="m_sitemap" id="m_intro" class="hidden" checked>
        <input type="radio" name="m_sitemap" id="m_ir" class="hidden">
        <input type="radio" name="m_sitemap" id="m_esg" class="hidden">
        <input type="radio" name="m_sitemap" id="m_crew" class="hidden">
        <input type="radio" name="m_sitemap" id="m_pr" class="hidden">
        <input type="radio" name="m_sitemap" id="m_family" class="hidden">
        <input type="radio" name="m_sitemap" id="m_member" class="hidden">
        <ul class="m_gnb">
          <li>
            <label for="m_intro">
              그룹개요
            </label>
          </li>
          <li>
            <label for="m_ir">
              투자정보
            </label>
          </li>
          <li>
            <label for="m_esg">
              ESG 경영
            </label>
          </li>
          <li>
            <label for="m_crew">
              인재채용
            </label>
          </li>
          <li>
            <label for="m_pr">
              PR센터
            </label>
          </li>
          <li>
            <label for="m_family">
              Familysite
            </label>
          </li>
          <li>
            <label for="m_member">
              Login / Join
            </label>
          </li>
        </ul>
        <div class="m_lnb_wrap">
          <div class="m_lnb m_intro hidden">
            <ul>
              <li>
                <input type="checkbox" id="m_intro_desc" class="hidden">
                <label for="m_intro_desc">
                  그룹개요
                </label>
                <ul class="m_intro_3depth">
                  <li>
                    <a href="m_sub.html" title="회사소개">회사소개</a>
                  </li>
                  <li>
                    <a href="m_sub.html" title="비전과미션">비전과 미션</a>
                  </li>
                  <li>
                    <a href="m_sub.html" title="전략목표">전략목표</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="m_sub.html" title="경영진">
                  경영진
                </a>
              </li>
              <li>
                <a href="m_sub.html" title="하나네트워크">
                  하나 네트워크
                </a>
              </li>
              <li>
                <a href="m_sub.html" title="기업아이덴티티">
                  기업 아이덴티티
                </a>
              </li>
              <li>
                <a href="m_sub.html" title="회사위치">
                  회사위치
                </a>
              </li>
            </ul>
          </div>
          <div class="m_lnb m_ir hidden">
            <ul>
              <li>
                <a href="#none" title="기업지배구조">
                  기업지배구조
                </a>
              </li>
              <li>
                <a href="#none" title="투자정보">
                  투자 정보
                </a>
              </li>
              <li>
                <a href="#none" title="공시정보">
                  공시 정보
                </a>
              </li>
              <li>
                <a href="#none" title="재무정보">
                  재무 정보
                </a>
              </li>
              <li>
                <a href="#none" title="IR정보">
                  IR 정보
                </a>
              </li>
              <li>
                <a href="#none" title="주가정보">
                  주가 정보
                </a>
              </li>
            </ul>
          </div>
          <div class="m_lnb m_esg hidden">
            <ul>
              <li>
                <a href="#none" title="ESG전략">
                  ESG 전략
                </a>
              </li>
              <li>
                <a href="#none" title="ESG금융">
                  ESG 금융
                </a>
              </li>
              <li>
                <a href="#none" title="ESG활동">
                  ESG 활동
                </a>
              </li>
              <li>
                <a href="#none" title="ESG성과">
                  ESG 성과
                </a>
              </li>
              <li>
                <a href="#none" title="ESGReporting">
                  ESG Reporting
                </a>
              </li>
            </ul>
          </div>
          <div class="m_lnb m_crew hidden">
            <ul>
              <li>
                <a href="#none" title="인재상">
                  인재상
                </a>
              </li>
              <li>
                <a href="#none" title="채용절차">
                  채용 절차
                </a>
              </li>
              <li>
                <a href="#none" title="채용정보">
                  채용 정보
                </a>
              </li>
              <li>
                <a href="#none" title="복리후생">
                  복리 후생
                </a>
              </li>
            </ul>
          </div>
          <div class="m_lnb m_pr hidden">
            <ul>
              <li>
                <a href="m_notice_list.php" title="공지사항">
                  공지사항
                </a>
              </li>
              <li>
                <a href="m_notice_list.php" title="보도자료">
                  보도자료
                </a>
              </li>
              <li>
                <a href="m_notice_list.php" title="광고">
                  광고
                </a>
              </li>
              <li>
                <a href="m_notice_list.php" title="스포츠">
                  스포츠
                </a>
              </li>
            </ul>
          </div>
          <div class="m_lnb m_family hidden">
            <ul>
              <li>
                <a href="https://www.hanafn.com/main/index.do" title="하나금융그룹">
                  하나금융그룹
                </a>
              </li>
              <li>
                <a href="https://www.kebhana.com/" title="하나은행">
                  하나은행
                </a>
              </li>
              <li>
                <a href="https://www.hanaw.com/main/main/index.cmd" title="하나증권">
                  하나증권
                </a>
              </li>
              <li>
                <a href="https://www.hanacard.co.kr/" title="하나카드">
                  하나카드
                </a>
              </li>
              <li>
                <a href="https://www.hanacapital.co.kr/index.hnc" title="하나캐피탈">
                  하나캐피탈
                </a>
              </li>
              <li>
                <a href="https://www.hanalife.co.kr/" title="하나생명">
                  하나생명
                </a>
              </li>
              <li>
                <a href="https://www.hanainsure.co.kr/" title="하나손해보험">
                  하나손해보험
                </a>
              </li>
              <li>
                <a href="https://www.hanasavings.com/" title="하나저축은행">
                  하나저축은행
                </a>
              </li>
              <li>
                <a href="https://www.hanatrust.com/" title="하나자산신탁">
                  하나자산신탁
                </a>
              </li>
              <li>
                <a href="https://www.hana-aamc.com/" title="하나대체투자자산운용">
                  하나대체투자자산운용
                </a>
              </li>
              <li>
                <a href="http://www.hanafni.com/" title="하나에프앤아이">
                  하나에프앤아이
                </a>
              </li>
              <li>
                <a href="https://www.hanaventures.co.kr/main" title="하나벤처스">
                  하나벤처스
                </a>
              </li>
              <li>
                <a href="https://www.hanais.com/" title="하나펀드서비스">
                  하나펀드서비스
                </a>
              </li>
              <li>
                <a href="https://www.hanati.co.kr/kor/main.jsp" title="하나금융티아이">
                  하나금융티아이
                </a>
              </li>
              <li>
                <a href="https://www.finnq.com/" title="하나금융파인드">
                  하나금융파인드
                </a>
              </li>
              <li>
                <a href="https://www.hanafind.com/" title="핀크">
                  핀크
                </a>
              </li>
            </ul>
          </div>
          <div class="m_lnb m_member hidden">
            <ul>
              <li>
                <a href="m_login.php" title="로그인바로가기">
                  Login
                </a>
              </li>
              <li>
                <a href="m_register.php" title="회원가입바로가기">
                  Join
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- 메인영역 서식 -->
  <main>

<?php if(!isset($_SESSION['ss_mb_id'])){ //로그인 세션이 없을 경우 로그인 화면 ?>

    <article id="login">
      <h2>로그인</h2>
      <p>하나금융 그룹에 오신 것을 환영합니다.</p>
      <form name='login' method='post' action='./login_checkout.php'>
        <fieldset id="l_wrap" class="flex">
          <legend class="hidden">레전드 로그인 폼</legend>
          <input type="text" name="mb_id" placeholder="아이디">
          <input type="password" name="mb_password" placeholder="패스워드">
          <ul class="log_info flex">
            <li>
              <input type="checkbox" name="i_store" id="i_store">
              <label for="i_store">아이디 저장</label>
            </li>
            <li><a href="#">아이디/비밀번호 찾기&nbsp; </a></li>
            <li><a href="./m_register.php" title='회원가입하기'>| &nbsp;<span>회원가입</span></a></li>
          </ul>
          <input type="submit" value="로그인" id="l_submit">
        </fieldset>
      </form>
    </article>

<?php } else { //로그인 세션이 없을경우 로그인 완료 화면 ?>


<?php
  $mb_id = $_SESSION['ss_mb_id'];

  $sql = "select * from member where mb_id = trim('$mb_id')"; //데이터조회
  $result = mysqli_query($conn, $sql); //조회한 결과를 변수에 담고
  $mb = mysqli_fetch_assoc($result); //회원정보를 반복문을 통해 변수에 담는다.

  mysqli_close($conn); //데이터 가져왔으니 더이상 필요없어서 종료함.
?>
<article class='user_info'>
<h2 class='info_h2'>회원정보</h2>
<table class="info_box">
  <tr>
    <th>아이디</th>
    <td><?php echo $mb['mb_id'] ?></td>
  </tr>
  <tr>
    <th>이름</th>
    <td><?php echo $mb['mb_name'] ?></td>
  </tr>
  <tr>
    <th>회원가입일</th>
    <td><?php echo $mb['mb_datetime'] ?></td>
  </tr>
  <tr>
    <th>회원정보 수정일</th>
    <td><?php echo $mb['mb_modify_datetime'] ?></td>
  </tr>
</table>
<p class='info_btn flex'>
  <a href="./register.php?mode=modify" title='회원정보수정'>회원정보수정</a>
  <a href="./logout.php" title='로그아웃'>로그아웃</a>
</p>
</article>
<?php } ?>

</main>

  <!-- 푸터영역 서식 -->
  <footer>
  <!-- 탑버튼 서식 -->
  <a href="#" title="상단으로바로가기" id="top_btn"><div class="t_btn_b"></div></a>
    <div id="m_footer_wrap">
      <address class="m_address">
        <div class="f_top flex">
          <ul class="m_address_left">
            <li>
              <a href="index.html" title="">
                <img src="./images/common/header.logo.svg" alt="로고">
              </a>
            </li>
            <li>서울특별시 중구 을지로 00</li>
            <li>00-0000-0000</li>
          </ul>
          <ul class="m_address_right">
            <li>
              <a href="#none" title="하나맵">하나맵</a>
            </li>
            <li>
              <a href="#none" title="개인정보처리방침">개인정보처리방침</a>
            </li>
            <li>
              <a href="#none" title="고객정보취급방침">고객정보취급방침</a>
            </li>
            <li>
              <a href="#none" title="신용정보취급활용체제">신용정보취급활용체제</a>
            </li>
          </ul>
        </div>
        <p>Copyright &copy; HANA FINANCIAL GROUP 2012. ALL RIGHT RESERVED.</p>
      </address>
    </div>
  </footer>

</body>
</html>