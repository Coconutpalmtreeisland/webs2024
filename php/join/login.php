<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php include "../include/head.php" ?>
</head>
<body class="gray"> 
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

    <header id="header" role="banner">
        <div class="header__inner container">
            <div class="left">
                <a href="../index.html">
                    <span class="blind">메인으로</span>
                </a>
            </div>
            <div class="logo">
                <a href="main.html">Incredorable Blog</a>
            </div>
            <div class="right">
                <ul>
                    <li><a href="join.html">회원가입</a></li>
                </ul>
            </div>
        </div>
        <nav class="nav__inner">
            <ul>
                <li><a href="#">회원가입</a></li>
                <li><a href="#">로그인</a></li>
                <li><a href="#">게시판</a></li>
                <li><a href="#">블로그</a></li>
            </ul>
        </nav>
    </header>
    <!-- //header -->

    <main id="main" role="main">
        <section class="login__inner container">
            <h2>로그인</h2>
            <p>로그인을 하면 게시글 및 댓글 작성이 가능합니다.</p>
            <div class="login__form btStyle bmStyle">
                <form action="loginSave.php" name="login" method="post">
                    <fieldset>
                        <legend class="blind">로그인 영역</legend>
                        <div>
                            <label for="youEmail" class="required blind">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호" class="input__style" autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn__style2 mt30">로그인</button>
                    </fieldset>
                </form>
            </div>
            <div class="login__footer">
                <ul class="list__style">
                    <li>회원가입을 하지 않았다면 회원가입을 먼저 해주세요! <a href="#">회원가입</a></li>
                    <li>아이디가 기억나지 않는다면! <a href="#">아이디 찾기</a></li>
                    <li>비밀번호가 기억나지 않는다면! <a href="#">비밀번호 찾기</a></li>
                </ul>
            </div>
        </section>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //foter -->

</body>
</html>