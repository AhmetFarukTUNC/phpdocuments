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

    echo $text."<br/>";#123456

    $text = implode(" ",$numbers);

    echo $text."<br/>"; #1 2 3 4 5 6 

    $text = implode(",",$numbers);

    echo $text."<br/>"; #1,2,3,4,5,6,

    $text = implode(" is number<br/>",$numbers);
    
    #1 is number
    #2 is number
    #3 is number
    #4 is number
    #5 is number
    #6 is number

    echo $text."<br/>"; 
    
    
    
    

    ?>
</body>
</html>
