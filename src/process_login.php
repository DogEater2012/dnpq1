<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
</head>
    
    <body>
    <h1> login</h1>
        <?php 
        
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = " 
        SELECT * FROM userinfo where username = \"$username\" and password = \"$password\"
        ";
        
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0) {
            echo "로그인성공이다 아쎄이! 맘껏 놀아라!";
           
            $_SESSION['passwd'] = $password;
            $_SESSION['username'] = $username;
            echo "<a  href = \"index.php\" target = \"_self\" title = \"메인페이지\">메인페이지</a>";
        }
        else{
            echo "다시 로그인해라 아쎄이!";
            echo "<a href = \"login.php\" target = \"self\" title = \"로그인\">로그인</a>";
        }
     
        ?>

</body> 
</html>