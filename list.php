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

    // List function assigns array element to variable.

    $colors = array("Red","Yellow","Green","Gray");

    echo "<pre>";

    print_r($colors);

    echo "</pre>";

    list($FirstColor,$SecondColor,$ThirdColor,$FourthColor) = $colors;

    echo $FirstColor."<br/>"; # Red

    echo $SecondColor."<br/>"; # Yellow

    echo $ThirdColor."<br/>"; # Green

    echo $FourthColor."<br/>"; # Gray

    echo "<br/><br/>";


    list($FirstColor,,$ThirdColor,) = $colors;

    echo $FirstColor."<br/>"; # Red

    echo $ThirdColor."<br/>"; # Green

    $colors = array("Red",array("Yellow","Green",array("Mehmet","Ahmet","Onur")),"Gray");

    list($FirstColor,list($b1,$b2,list($i1,$i2,$i3)),$ThirdColor) = $colors;

    echo "<br/><br/>".$FirstColor."<br/>"; # Red

    echo $b1."<br/>"; # Yellow

    echo $b2."<br/>"; #Green

    echo $i1."<br/>"; # Mehmet

    echo $i2."<br/>"; # Ahmet

    echo $i3."<br/>"; # Onur

    echo $ThirdColor."<br/>"; # Gray

    echo "<br/><br/>";

    ?>
</body>
</html>