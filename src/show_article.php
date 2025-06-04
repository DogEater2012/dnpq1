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
            echo "<h1>제목: ".$_POST['title']."</h1>";
            echo "<h2>작성자: ".$_POST['writter']."</h2>";
            echo "<p>본문: ".$_POST['description']."</p>";
        ?>
        
    </body>

</html>