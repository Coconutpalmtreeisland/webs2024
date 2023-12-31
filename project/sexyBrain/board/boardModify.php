<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
    
    $query = "SELECT boardCategory, boardTitle, boardContents FROM sexyBoard WHERE boardId = '{$boardId}' AND boardAuthor = '{$youId}'";
    $result = $connect->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 수정</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="wrap">
        <?php include "../include/header__login.php" ?>
        <!-- header -->

        <main id="main">
            <div id="b_write_wrap" class="b_w">
                <div class="write_board"></div>
                <form action="boardModifySave.php" name="boardModifySave" method="post" enctype="multipart/form-data"
                    class="board_write b_p">
                    <input type="hidden" name="boardId" value="<?= $boardId ?>">
                    <fieldset>
                        <legend class="blind">글 작성하기</legend>
                        <div>
                            <label for="boardCategory" class="blind">카테고리</label>
                            <select name="boardCategory" id="boardCategory">
                                <option value="공지" <?= $row['boardCategory'] == '공지' ? 'selected' : '' ?>>공지사항</option>
                                <option value="질문" <?= $row['boardCategory'] == '질문' ? 'selected' : '' ?>>질문</option>
                                <option value="자유" <?= $row['boardCategory'] == '자유' ? 'selected' : '' ?>>자유게시판</option>
                            </select>
                        </div>
                        <div>
                            <label id="b_title" for="title" class="label_text">제목 <span class="red_t">*</span></label>
                            <input type="text" id="boardTitle" name="boardTitle" class="input__style"
                                placeholder="제목을 입력해주세요" value="<?= $row['boardTitle'] ?>">
                        </div>
                        <div id="weite_box2">
                            <label id="boardContents_w" for="boardContents" class="label_text">내용 작성하기</label>
                            <textarea name="boardContents" id="boardContents" rows="20"
                                class="input__style"><?= $row['boardContents'] ?></textarea>
                        </div>
                        <div>
                            <label for="boardFile" class="blind file">파일</label>
                            <input type="file" id="boardFile" name="boardFile">
                            <p>* jpg, gif, png, webp 파일만 넣을 수 있습니다. 이미지 용량은 1MB를 넘길 수 없습니다.</p>
                        </div>
                        <div class="board__btns">
                            <button type="submit" class="btn__style03">저장하기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </main>
        <!-- main -->

        <?php include "../include/footer.php"?>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#boardContents'), {
                language: 'ko'
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>