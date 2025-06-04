<?php
    session_start();
    if ($_SESSION['username'] != $_POST['writter']){
            echo "<script>alert('작성자만 수정 가능하다 아쎄이!!!!!');</script>";
       echo "<script> location.href = 'index.php'; </script>";
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
        $id = $_POST['id'];
        if(isset($_SESSION['username'])){
            echo "수정란에 온걸 반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
        }
        ?>

        <form action = "process_edit.php", method = "POST">
            <p><label>title</label><input type = "text" name=  "title" placeholder = "제목"></p>
            <p><label>description</label><textarea name=  "description" placeholder = "desc" ></textarea></p>
            <p><input type="hidden" name="id" value="<?php echo $id; ?>"><input type = "submit" value = "수정"></p>
        </form>
    </body>

</html>