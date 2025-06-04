<?php
    session_start();
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title> 해병대 홍보 </title>
</head>

<body>
    <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
            
        }
    ?>
    <img src = "images/대한민국해병대.png" width = "40%">
    <h1> 자랑스러운 대한민국 해병대를 소개합니다!</h1>
    <h2> 전설의 해병들!!!!</h2>

    <ol>
        <?php
            $legend_marine = ['황근출','무모칠','톤톤정','함박아','박철곤','마철두','쾌흥태'];
            $i = 0;
            
            while(isset($legend_marine[$i])){
                echo "<li>".$legend_marine[$i]."</li>";
                $i++;
            }
            
        
        ?>
    </ol>
</body>
