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
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sex = $_POST['sex'];

        $sql = " 
        INSERT into userinfo (username, password, sex)
        values ('$username', '$password', '$sex')
        ";
        $result = mysqli_query($conn, $sql);
        
        
        if($result ==true) {
            echo "<script>alert('탈퇴가 완료되었습니다')</script>";
        }
        
     
        ?>

</body> 
</html>