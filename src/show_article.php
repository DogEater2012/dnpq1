<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<script>alert('로그인을 하고 글을 써라 아쎄이!!!!!');</script>";
       echo "<script> location.href = 'index.php'; </script>";
       exit();
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>게시글</title>
        
    </head>

    <body>
        <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
        }
        ?>
        <?php
            if($_POST['is_clame']){
                $clame = '신고당한 게시글입니다';
            } else {$clame = '신고를 아직 당하지 않은 게시글입니다';}
            echo "<h1>제목: ".$_POST['title']."</h1>";
            echo "<h2>작성자: ".$_POST['writter']."</h2>";
            echo "<p>본문: ".$_POST['description']."</p>";
            echo "<p>신고를 당한 게시물입니까? -> ".$clame."</p>";
            echo "<p><form action = 'process_ban.php' method = 'POST'><input type = hidden name = 'writter' value = '".$_POST['writter']."' ><input type = submit value = 수정 ></form></p>";
            echo "<p><br><br><br><br>혹시 이 글을 읽고 불쾌하셨나요? 괜찮다면 신고하시겠습니까? <form action = 'process_ban.php' method = 'POST'><input type = hidden name = 'id' value = '".$_POST['id']."' ><input type = submit value = 네 ></form></p>";
        ?>
        
    </body>

</html>