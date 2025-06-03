<!doctype html>
<html>
    <body>
    <h1> test mysql</h1>
        <?php 
        $conn = mysqli_connect("assignment_template-db-1", "exampleuser", "examplepass", "exampledb");
        $sql = " 
        SELECT userinfo FROM exampledb;
        
        ";

        echo $sql;
        mysqli_query($conn, $sql);
     
        ?>

</body> 
</html>