<?php
    session_start();
?>
<!doctype html>
<head>
    <meta charset = "UTF-8">
    <title> 해병탈퇴 </title>
</head>

<body>
    <?php        
        if(isset($_SESSION['username'])){
            echo "반갑다!". $_SESSION['username']."아쎄이!!!!!!!<br>";
            
        }
    ?>
    <img src = "images/해병대전우들.png" width = "40%">
    <h1> 네가 선택한 해병이다. 악으로 깡으로 버텨라. </h1>
    <h6> 전우를 내버려두고 도망가는 당신, 부끄럽지 않으십니까? </h6>
    <h5> 전우를 내버려두고 도망가는 당신, 부끄럽지 않으십니까? </h5>
    <h4> 전우를 내버려두고 도망가는 당신, 부끄럽지 않으십니까? </h4>
    <h3> 전우를 내버려두고 도망가는 당신, 부끄럽지 않으십니까? </h3>
    <form aciton = 'process_delete.php' method = "POST">
        <label>당신은 부끄럽지도 않습니까? 아래 버튼을 누르면 탈퇴가 완료됩니다ㅉ</label>
        <p><input type = "submit" name = "jinba" value = "저는 전우를 버리고 도망가는 찐빠중의 찐빠, 오도찐빠해병입니다!!!!"></p>
    </form>
</body>
