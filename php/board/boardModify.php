<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 수정하기</title>
    <?php
    include "../include/style.php";
    ?>
    <!-- //style -->
</head>

<body>
<?php
    include "../include/skip.php";
?>
    <!--//skip  -->
<?php
    include "../include/header.php";
?>
    <!--//header  -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="board-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">게시글 수정하기</h3>
                <p class="section__desc">수업과 관련된 글을 수정할 수 있습니다.</p>
                <div class="board__inner">
                    <div class="board__modify">
                        <form action="boardModifySave.php" name="boardModify" method="post">
                            <fieldset>
                                <legend class="ir_so">게시판 수정 영역</legend>

<?php
    $boardID =$_GET['boardID'];
    echo  $boardID;
    // 쿼리문 작성(해당 ID값의 제목, 내용을 출력)
    $sql = "SELECT boardID, boardTitle, boardContents FROM myBoard WHERE boardID = {$boardID}";
    $result = $connect -> query($sql);

    if($result){
        $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<div style='display:none;'><label for='boardID'>번호</label><input type='text' name='boardID' id='boardID' value='".$boardInfo['boardID']."'></div>";
        echo "<div><label for='boardTitle'>제목</label><input type='text' name='boardTitle' id='boardTitle' class='title-text' value='".$boardInfo['boardTitle']."'></div>";
        echo "<div><label for='boardContents'>내용</label><textarea name='boardContents' id='boardContents' rows='15'>".$boardInfo['boardContents']."</textarea></div>";
        echo "<div><label for='youPass'>비밀번호</label><input type='password' name='youPass' id='youPass' placeholder='로그인 비밀번호를 입력해주세요!!' autocomplete='off' required></div>";
    }
?>                           
                                <div class="board__btn">
                                    <button type="submit" value="수정하기">수정하기</button>
                                    <a href = "board.php">목록보기</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>                 
                </div>
            </div>
        </section>
    </main>
      
        <?php
    include "../include/footer.php";
    ?>
    <!--//footer  -->

   
</body>
</html>