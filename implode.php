<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numbers=array(1,2,3,4,5,6,"");

    echo "<pre>";

    print_r($numbers);

    echo "</pre>";

    $text = implode($numbers);

    echo $text."<br/>";

    $text = implode(" ",$numbers);

    echo $text."<br/>";

    $text = implode(",",$numbers);

    echo $text."<br/>";

    $text = implode(" is number<br/>",$numbers);

    echo $text."<br/>";

    ?>
</body>
</html>