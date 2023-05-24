<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        // $fruits = array();
        // $fruits[0] = 'apple';
        // $fruits[1] = 'banana';
        // $fruits[2] = 'cherry';

        $fruits = array('apple','banana','orange');
    

         // echo $fruits;
         //isset  이 괄호 안의 변수명이 세팅이 되어 있다면 
         //
         if(isset($fruits[2])) {
            echo $fruits[2];
         } else {
            echo '세번째 배열에는 값이 없다 ';
         }
         ?>
         <hr/>
         <h2>for 반복문</h2>
         <?php
         // for문 사용시  length대신에 count를 사용한다 
         // for문 사용시 모든 i(변수)에 $ 적는 거 잊지말기  ! 
            for($i=0; $i<count($fruits); $i++) { 
                echo $fruits[$i].'<br/>';
         }
    ?> 
        <h2>foreach 반복문</h2>
        <?php
        foreach($fruits as $item) { //fruits 배열에 있는 $item을 다 불러온다 
            echo $item.'<br/>';
        }
    ?>
        <h2>연관 배열 associative array</h2>
        <?php
        /*
            $prices = array();
            $prices['apple'] = 1000;
            $prices['banana'] =2000;
            $prices['cherry'] = 1500;
        */
            $prices = array('apple'=> 1000, 'banana'=> 2000, 'cherry'=> 1500);

            foreach($prices as $key => $price) { // prices에 있는 key의 price를 가져온다 // key란 이름이고 price란 가격이다 
                echo $key. " _ ".$price.'<br/>';
            }
        ?>
</body>
</html>