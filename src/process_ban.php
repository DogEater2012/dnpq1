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
        $article_id = $_POST['id'];
        $sql1 = "UPDATE article set is_clame = '1' WHERE id = '$article_id'";
       

        $result = mysqli_query($conn, $sql1);
  
        if($result){
            echo "<script>alert('신고가 완료되었다 아쎄이!'); location.href = 'community.php'; </script>
            ";
        }
        
        ?>

</body> 
</html>