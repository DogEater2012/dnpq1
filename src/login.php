<?php
    session_start();
?>
<!doctype html>
<head>
    <title> 로그인 </title>
</head>

<body>
    <img src = "images/해병성채.png" width = "30%">
    <h1>어서와라 아쎄이!</h1>
    <form action = "process_login.php", method = "POST">
    <p><label>username</label><input type = "text" name=  "username" placeholder = "username"></p>
    <p><label>password</label><input type = "password" name=  "password" placeholder = "password"></p>
    <p><input type = "submit" value = "환영한다 아쎄이"></p>
    </form>
</body>
