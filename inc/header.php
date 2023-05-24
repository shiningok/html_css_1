<?php
     if(!isset($title)) { // $title이 지정이 되어있는지 아닌지 확인하기 위해서 isset을 사용하여 쓴다 
        $title = ''; // $title이 설정이 되어있지 않으면 빈값인데.. 
     }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
</head>
<body>
    <h1><?=$title;?></h1> 

    <!-- home.php에서 설정된 $title를 가져온다 -->