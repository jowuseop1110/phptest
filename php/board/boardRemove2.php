<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_GET['boardID'];
    $boardID = $connect -> real_escape_string($boardID);

    // 쿼리문 작성(보드ID값 삭제하기)
    $sql = "DELETE FROM myBoard2 WHERE boardID = {$boardID}";
    $connect -> query($sql);

    echo "<script>alert('삭제되었습니다.'); location.href = 'board2.php';</script>"
?>
</body>
</html>