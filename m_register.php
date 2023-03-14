<!-- 회원가입 -->
<?php
  include('./db_conn.php'); //데이터베이스에 접근을 하기 위한 내용
  if(isset($_SESSION['ss_mb_id'])&&$_GET['mode']=='modify'){
    //세션이 있고 회원수정mode라면 회원정보를 가져온다.

    $mb_id = $_SESSION['ss_mb_id'];//세션정보에서 아이디값을 변수에 담고
    $sql = "SELECT * FROM member WHERE mb_id = '$mb_id'";//회원정보를 조회한다.
    $result = mysqli_query($conn, $sql); //변수에 데이터접소정보와 조회데이터를 변수에 담아
    $mb = mysqli_fetch_assoc($result); //반복문으로 돌려서 변수에 담아 아래에서 출력하도록한다
    mysqli_close($conn);//데이터 베이스 접속 종료
    $mode = "modify";
    $title = "회원수정";
    $modify_mb_info = "readonly";
  }else{
    $mode = "insert";
    $title = "회원가입";
    $modify_mb_info = '';
    $mb = [
      'mb_id' => '',
      'mb_password' => '',
      'mb_name' => ''
    ];
  }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
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
  <!-- join서식 -->
  <link rel="stylesheet" href="./css/m_join.css" type="text/css">
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
                <a href="https://www.hanafn.com:8002/main.do" title="하나금융그룹">
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
    <article id="join">
      <h2><?php echo $title ?></h2>
      <p>하나금융 그룹의 다양한 서비스와 혜택을 누리세요.</p>
      <form action="./register_update.php" onsubmit="" method="post">
        <fieldset id="j_wrap" class="flex">
          <legend class="hidden">레전드 회원가입 폼</legend>
          <input type="hidden" name="mode" value="<?php echo $mode ?>"></input>
          <!-- 이름 -->
          <input type="text" placeholder='이름' name="mb_name" value="<?php echo $mb['mb_name'] ?>"<?php echo $modify_mb_info ?>>
          <!-- 아이디 -->
          <input type="text" placeholder='아이디' name="mb_id" value="<?php echo $mb['mb_id']?>" <?php echo $modify_mb_info ?>>
          <!-- 비밀번호 -->
          <input type="password" name="mb_password" placeholder='패스워드'>
          <p>
            <input type="checkbox" name="u_agree" id="u_agree">
            <label for="u_agree">서비스 이용약관에 동의합니다. (필수)</label>
          </p>
          <p>
            <input type="checkbox" name="p_agree" id="p_agree">
            <label for="p_agree">개인정보 수집이용과 처리방침에 동의합니다. (선택)</label>
          </p>
        </fieldset>
        <div class="j_btnwrap flex">
          <a href="./m_login.php" id="j_cancel">취소</a>
          <input type="submit" value="<?php echo $title ?>" id="j_submit">
        </div>
      </form>
    </article>
  </main>

  <script>
function fregisterform_submit(f) { // submit 최종 폼체크

   if (f.mb_id.value.length < 1) { // 회원아이디 검사
      alert("아이디를 입력하십시오.");
      f.mb_id.focus();
      return false;
   }

   if (f.mb_name.value.length < 1) { // 이름 검사
      alert("이름을 입력하십시오.");
      f.mb_name.focus();
      return false;
   }

   if (f.mb_password.value.length < 3) {
      alert("비밀번호를 3글자 이상 입력하십시오.");
      f.mb_password.focus();
      return false;
   }

   return true;

}
</script>
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
              <a href="map" title="하나맵">하나맵</a>
            </li>
            <li>
              <a href="개인정보처리방침" title="개인정보처리방침">개인정보처리방침</a>
            </li>
            <li>
              <a href="고객정보취급방침" title="고객정보취급방침">고객정보취급방침</a>
            </li>
            <li>
              <a href="신용정보취급활용체제" title="신용정보취급활용체제">신용정보취급활용체제</a>
            </li>
          </ul>
        </div>
        <p>Copyright &copy; HANA FINANCIAL GROUP 2012. ALL RIGHT RESERVED.</p>
      </address>
    </div>
  </footer>
</body>
</html>