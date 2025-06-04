<?php
    session_start();
   
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
</head>
    
    <body>
        <?php     
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $title = $_POST['title'];
        $description = $_POST['description'];
        $id = intval($_POST['id']);
        $chsql = "UPDATE article SET title = '$title', description = '$description' WHERE id = $id";
        $result = mysqli_query($conn, $chsql);
        if($result){
            echo"<script>alert('수정성공이다 아쎄이!'); location.href = 'community.php';</script>";
        }
        ?>
    </body>
</html>