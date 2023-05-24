<?php
    $title = 'login';
    include('inc/header.php'); // 파일을 불러오기 위함임 //  inc파일에서 header.php파일을 불러와라~ 
    require('inc/functions.php')
?>
<form action = "requset.php" method="post">
    <p>
        <label for="userName">Name</label>
        <input type="text" name="username" id="userName">
    </p>
    <p>
        <label for="userEmail">Email</label>
        <input type="email" name="useremail" id="userName">
    </p>
    <p>
        <input type="submit" value="로그인">
    </p>
</form>

<?php
    include('inc/footer.php');
?>