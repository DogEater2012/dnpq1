<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>해병대 자진입대</title>
    
</head>

<body>
    <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
            
        }
    ?>
    
    <h1>해병대 모집</h1> 
    <img src = "images/해병대로고.png" width = "20%">
    <br>
    <a href = "enlistment.php" target = "_blank" title = "자진입대 신청">자진입대</a>
    <?php
        if(isset($_SESSION['username'])){
            echo "<a href = \"logout.php\" target = \"self\" title = \"로그아웃\">로그아웃</a>";
        }
        else{
            echo "<a href = \"login.php\" target = \"self\" title = \"로그인\">로그인</a>";
        }
    ?>
 
    <a href = "promotion.php" target = "_blank" title = "해병대 홍보">해병대홍보</a>
    <a href = "notice.php" target = "_blank" title = "공지">공지</a>
    <a href = "community.php" target = "_blank" title = "해병놀이터">해병놀이터</a>
    <a href = "complain.php" target = "_blank" title = "마음의 편지">마음의편지</a>
    <a href = "delete.php" target = "_blank" title = "해병탈퇴" style = "font-size:3px">해병탈퇴</a>
    <br>
    
</body>
</html>