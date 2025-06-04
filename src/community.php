<?php
 session_start();
?>

<!doctype html>
<head>
    <meta charset = "UTF-8">
    <title> 해병놀이터 </title>
</head>

<body>
    <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
        }
    ?>
    <img src = "images/놀이터.jpg" width = "40%">
    <h1> 해병놀이터</h1>
    <h2>이곳은 해병들의 쉼터입니다.</h2>
    <br>
    <p><a href = "make_article.php">글쓰기</a></p>
    <?php
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $sql = " 
        SELECT * FROM article
        ";
        
        $result = mysqli_query($conn, $sql);
        $i = 0;
        echo "<ol>";
        while($article = mysqli_fetch_assoc($result)){
            echo "<li>".$article['title']." 작성자 ".$article['user_name']."<form action = 'show_article.php' method = 'POST'><input type = 'hidden' name = 'id' value = '". $article['id'] ."'><input type = 'hidden' name = 'title' value = '".$article['title']."'><input type = 'hidden' name = 'is_clame' value = '" . $article['is_clame'] ."'><input type = 'hidden' name = 'description' value = '" . $article['description'] . "'><input type = 'hidden' name = 'writter' value = '".$article['user_name']."'><input type = 'submit' value = '보기'></form></li>";
        }
        echo "</ol>";
    ?>
</body>
