<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <!-- CSS -->
    <?php include "../include/head.php" ?>
    <!-- //head -->
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro__inner bmStyle container">
            <div class="intro__img">
                <img srcset="../assets/img/intro01-min.jpgs ../assets/img/intro01@2x-min.jpg, ../assets/img/intro01@3x-min.jpg" alt="소개 이미지">
            </div>
            <div class="intro__text">
                회원가입시 다양한 정보를 자유롭게 볼 수 있습니다.
            </div>
        </div>
        <section class="join__inner container">
            <h2>회원가입</h2>
            <div class="join__form">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div>
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 적어주세요!" class="input__style" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름</label>
                            <input type="text" id="youName" name="youName" placeholder="이름을 적어주세요!" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호을 적어주세요!" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" name="youPassC" placeholder="다시 한번 비밀번호을 적어주세요!" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPhone">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락처를 적어주세요!" class="input__style" required>
                        </div>
                        <button type="submit" class="btn__style mt100">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>