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
        $user_name = $_SESSION['username'];
        $sql = " 
        INSERT INTO article (title, description, user_name)
        values ('$title', '$description', '$user_name')
        ";

        $result = mysqli_query($conn, $sql);
        if($result){echo "<script>alert('글이 등록되었다 아쎄이!');</script>";}
        else{echo "<script>alert('뭔가 잘못됐다 아쎄이!!');</script>";}
        ?>

</body> 
</html>