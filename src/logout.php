<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    
    echo "<script>location.href = 'index.php';</script>";
    exit();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>로그아웃</title>


    </head>

    <body>



    </body>
</html>