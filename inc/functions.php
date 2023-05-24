<?php

function sum($x, $y) { // function 은 사용자지정함수임
    $result = $x + $y;
    return $result ; 
}

function output($value) {
    echo '<pre>'; // 그래도 출력할 때 사용하는 것  pre 를 사용하면 배열형태로 출력 된다 
    print_r($value);
    echo '</pre>';
}

function increment() {
   static $count = 0; // 정적변수설정 
   echo "{$count}<br/>";
   $count++;
}


?>
