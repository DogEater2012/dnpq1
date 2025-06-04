<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "<script>alert('로그아웃을 하고 회원가입을 해라 아쎄이!!!!!');</script>";
       echo "<script> location.href = 'index.php'; </script>";
       exit();
    }

?>

<!doctype html>
<html>
<head>
    <meta charset = "UTF-8">
    <title> 자진입대 신청 </title>
</head>

<body>
    <img src = "images/오도봉고.jpg" width = "30%">
    <h1> 자진입대를 환영한다 아쎄이</h1>
    <form action = "process_enlistment.php" method = "POST">
        <p><label>해병네임</label><input type = "text" name = "username" placeholder="username"></p>
        <p><label>해병암호</label><input type = "password" name = "password" placeholder="password"></p>
        <br>
        <label>man or boy?</label>
        <br>
        <p><label>boy<input type = "radio" name = "sex" value = boy></label></p>
        <p><label>man<input type = "radio" name = "sex" value = man></label></p>
        <p><input type = "submit" value = "입영신청"></p>
    </form>
    
</body>
</html>