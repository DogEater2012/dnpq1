<?php
    session_start();
    if ($_SESSION['username'] != $_POST['writter']){
            echo "<script>alert('작성자만 삭제 가능하다 아쎄이!!!!!');</script>";
       echo "<script> location.href = 'community.php'; </script>";
       exit();
        }
        
    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>글쓰기</title>
    </head>

    <body>
        <?php     
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $id = intval($_POST['id']);
        $chsql = "DELETE FROM article WHERE id = $id";
        $result = mysqli_query($conn, $chsql);
        if($result){
            echo"<script>alert('삭제성공이다 아쎄이!'); location.href = 'community.php';</script>";
        }
        ?>
    </body>

</html>