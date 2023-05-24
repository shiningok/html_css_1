<?php
    $title = 'request';
    include('inc/header.php'); // 파일을 불러오기 위함임 //  inc파일에서 header.php파일을 불러와라~ 
    require('inc/functions.php') 
    
?>
    <?php
    $name = $_GET["username"];
    $email = $_GET["useremail"];
        echo $name.'님의 입력한 이메일은'.$email.'입니다';
    ?>


<?php
    include('inc/footer.php');
?> 