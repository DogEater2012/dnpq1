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
        <title>글쓰기</title>
    </head>

    <body>
        <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
            
        }
    ?>





    </body>

</html>