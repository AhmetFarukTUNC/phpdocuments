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
 
       $names = array("Volkan","Hakan","Onur","Ümit","Serkan","Levent","Özgür","Eray","Gökhan","Hale","Aslı","Gökçe","Banu","Cansu");

       echo "<pre>";

       print_r($names);

       echo "</pre>";

       $newarray = array_chunk($names,3);

       echo "<pre>";

       print_r($newarray);

       echo "</pre>";

       $names = array("A1"=>"Volkan","A2"=>"Hakan","A3"=>"Onur","A4"=>"Ümit","A5"=>"Serkan","A6"=>"Levent","A7"=>"Özgür","A8"=>"Eray","A9"=>"Gökhan","A10"=>"Hale","A11"=>"Aslı","A12"=>"Gökçe","A13"=>"Banu","A14"=>"Cansu");

       echo "<pre>";

       print_r($names);

       echo "</pre>";

       $newarray = array_chunk($names,3);

       echo "<pre>";

       print_r($newarray);

       echo "</pre>";

       $newarray = array_chunk($names,3,TRUE);

       echo "<pre>";

       print_r($newarray);

       echo "</pre>";

       $newarray = array_chunk($names,2);

       echo "<pre>";

       print_r($newarray);

       echo "</pre>";

       $newarray = array_chunk($names,2,TRUE);

       echo "<pre>";

       print_r($newarray);

       echo "</pre>";

    ?>
</body>
</html>