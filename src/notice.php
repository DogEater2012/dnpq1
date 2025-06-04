<?php
    session_start();
?>
<!doctype html>
<head>
    <meta charset = "UTF-8">
    <title> 공지 </title>
</head>

<body>
    <img src = "images/황근출눈빛.png" width = "20%">
    <h1> 아쎄이 주목!!!!!!!!!!</h1>
    <?php
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $sql = "SELECT * FROM userinfo WHERE is_banned = 1";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<ol>";
            $banned_list = [];
            while($row = mysqli_fetch_assoc($result)){
                $banned_list[] = $row['username'];
                echo "<li>".$row['username']."아쎄이가 정지되었다!!!!!</li>";
            }
            echo "</ol>";
        }
    ?>
</body>
