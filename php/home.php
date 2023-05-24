<?php
    $title = 'home';
    include('inc/header.php'); // 파일을 불러오기 위함임 //  inc파일에서 header.php파일을 불러와라~ 
    require('inc/functions.php') 
    // include // include안에 오류가 있더라도 실행이 되는데
    //와 require 차이점 //  require는 안댐 뒤에 _once를 붙이면 한 번만 불러온다
?>
    <?php
       $result = sum(10,20);
       echo $result;
        
    ?>
    <h2>배열 출력</h2>
    <?php
        $fruits = ['apple','cherry','mango','podo'];
        //print_r은 php의 내장함수입니다 배열이나 객체를 문자열로 출력할 때 사용함 
        print_r($fruits);

       
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
            
            increment();
            increment(); // 정적변수로 설정을 안하면 값이 올라가지 않는다 
            increment(); // 정적변수로 설정을 안하면 값이 올라가지 않는다 
        
        ?>

<?php
    include('inc/footer.php');
?>
