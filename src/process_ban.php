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
        $sql2 = "UPDATE userinfo set warning = warning +1 WHERE username = '".$_POST['writter']."'";
        $sql1 = "UPDATE article set is_clame = '1' WHERE id = '$article_id'";
        $select = "SELECT * FROM userinfo WHERE username = '".$_POST['writter']."' ";
        
        $result3 = mysqli_query($conn, $select);
        $result2 = mysqli_query($conn, $sql2);
        $result1 = mysqli_query($conn, $sql1);
        $user_ban = mysqli_fetch_assoc($result3);
        
        if($user_ban['warning'] >2){
                     $sql3 = "UPDATE userinfo set is_banned = 1 WHERE username = '".$_POST['writter']."' ";
                  mysqli_query($conn, $sql3);
             }

    

            echo "<script>alert('신고가 완료되었다 아쎄이!'); location.href = 'community.php'; </script>
            ";
            exit();
        
        
        ?>

</body> 
</html>