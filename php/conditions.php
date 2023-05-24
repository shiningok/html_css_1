<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
    <?php
        // $result = 1<3; // true : 1 / false : 0 
        // echo $result == true;

        $first_name = 'alsrud';
        $last_name = 'woo';

        if($first_name == 'fdfs' || $last_name == 'xzc') { 
            echo '조건은 참이다';
        } else {
            echo '조건은 거짓이다';
        }
    ?>
</body>
</html>