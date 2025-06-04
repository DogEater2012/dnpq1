<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "<script>alert('로그아웃을 하고 회원가입을 해라 아쎄이!!!!!');</script>";
       echo "<script> location.href = 'index.php'; </script>";
    }
?>
<!doctype html>
<html>
    
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
            echo "<script>alert('후회하지 않으시겠습니까?')</script>";
        }
        
     
        ?>

</body> 
</html>