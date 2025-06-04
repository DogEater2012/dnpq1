<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<script>alert('로그인을 하고 회원탈퇴를 해라 아쎄이!!!!!');</script>";
       echo "<script> location.href = 'login.php'; </script>";
       exit();
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
    <body>
    <h1> test mysql</h1>
        <?php 
        $username = $_SESSION['username'];

        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        
        mysqli_query($conn, "DELETE FROM article WHERE user_name = '$username'");
        

        $sql = "DELETE FROM userinfo WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            echo "<script>alert('너의 흔적은 몽땅 제거되었다 아쎄이!!!!!!!!!!'); location.href = 'logout.php';</script>";
        }
        
     
        ?>

</body> 
</html>