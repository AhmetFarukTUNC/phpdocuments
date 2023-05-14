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

    $colors = array("Blue","Orange","Red","Yellow","Purple");

    $items = array("Koli","Araba","Ev","Lamba","Menekşe");

    $newarray = array_combine($colors,$items);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    $colors = array("key1"=>"Blue","key2"=>"Orange","key3"=>"Red","key4"=>"Yellow","key5"=>"Purple");

    $items = array("value1"=>"Koli","value2"=>"Araba","value3"=>"Ev","value4"=>"Lamba","value5"=>"Menekşe");

    $newarray = array_combine($colors,$items);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    $colors = array("Araçlar","Eşyalar","İsimler");

    $items = array(array("Gemi","Araba","Uçak"),"Masa",array("Volkan","Hakan"));

    $newarray = array_combine($colors,$items);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    $colors = array("Araçlar","Eşyalar","İsimler");

    $items = array(array("A1"=>"Gemi","A2"=>"Araba","A3"=>"Uçak"),"Masa",array("I1"=>"Volkan","I2"=>"Hakan"));

    $newarray = array_combine($colors,$items);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    ?>
</body>
</html>