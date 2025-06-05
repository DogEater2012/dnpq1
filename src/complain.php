<?php
    session_start();
?>

<!doctype html>
<head>
    <meta charset = "UTF-8">
    <title> 마음의 편지</title>
</head>

<body>
    <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
            
        }
    ?>
    <img src = "images/마음의편지.png" width = "20%">
    <h1> 허위로 전우를 고발하는 찐빠가 되지 맙시다.</h1>
        
</body>
