<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1> 
    <?php
        function sum($x, $y) { // function 은 사용자지정함수임
            return $x + $y; // 결과출력을 위해서 return을 해준다
        }
        echo sum(10,20); // sum이라는 함수에 넣어준다 
    ?>
    <h2>배열 출력</h2>
    <?php
        $fruits = ['apple','cherry','mango','podo'];
        //print_r은 php의 내장함수입니다 배열이나 객체를 문자열로 출력할 때 사용함 
        print_r($fruits);

        function output($value) {
            echo '<pre>'; // 그래도 출력할 때 사용하는 것  pre 를 사용하면 배열형태로 출력 된다 
            print_r($value);
            echo '</pre>';
        }
        output($fruits); 
    ?>
    <h2>지역변수 vs 전역변수</h2> 
    <?php
        function myfunc() {
            $var = 10; // 지역변수로써 함수 외부에서 출력 x
            echo "{$var}";  
        }
        myfunc();
    ?>
        <h2>정적변수</h2>
        <?php
            function increment() {
                 $count = 0; // 정적변수설정 
                echo "{$count}<br/>";
                $count++;
            }
            increment();
            increment(); // 정적변수로 설정을 안하면 값이 올라가지 않는다 
        
        ?>

</body>
</html>