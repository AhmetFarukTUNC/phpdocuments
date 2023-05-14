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

    // Merge function combinate two array.

    $array1 = array("Ahmet","Mehmet","Mahmut");

    $array2 = array("Hale","Jale","Müjde");

    $newarray = array_merge($array1,$array2);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    // Array(
    //[0] => Ahmet
    //[1] => Mehmet
    //[2] => Mahmut
    //[3] => Hale
    //[4] => Jale
    //[5] => Müjde)

    $array1 = array("data1"=>"Ahmet","data2"=>"Mehmet","data3"=>"Mahmut");

    $array2 = array("data1"=>"Hale","data2"=>"Jale","data3"=>"Müjde");

    $newarray = array_merge($array1,$array2);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    // Array
//    (
//    [data1] => Hale
//    [data2] => Jale
//    [data3] => Müjde
//    )

    $array1 = array();

    $array2 = array("data1"=>"Hale","data2"=>"Jale","data3"=>"Müjde");

    $newarray = array_merge($array1,$array2);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    // Array
   //  (
  //   [data1] => Hale 
  //   [data2] => Jale
  //   [data3] => Müjde
  //   )

    $array1 = array("data1"=>"Ahmet","data2"=>"Mehmet","data3"=>"Mahmut");

    $array2 = array("Hale","Jale","Müjde");

    $array3 = array(1,2,3,4,5,6);

    $newarray = array_merge($array1,$array2,$array3);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    // Array
   //  (
   //   [data1] => Ahmet
   //   [data2] => Mehmet
  //      [data3] => Mahmut
  //      [0] => Hale
  //      [1] => Jale
  //      [2] => Müjde
  //      [3] => 1
  //      [4] => 2
  //      [5] => 3
  //      [6] => 4
  //      [7] => 5
  //      [8] => 6
  //      )

    $array1 = array("data1"=>"Ahmet","data2"=>"Mehmet","data3"=>"Mahmut");

    $array2 = array("data1"=>"Hale","data2"=>"Jale","data3"=>"Müjde");

    $array3 = array(1,2,3,4,5,6);

    $newarray = array_merge_recursive($array1,$array2,$array3);

    echo "<pre>";

    print_r($newarray);

    echo "</pre>";

    // Array
// (
//    [data1] => Array
//        (
//            [0] => Ahmet
//            [1] => Hale
//        )

//    [data2] => Array
//        (
//            [0] => Mehmet
//            [1] => Jale
//        )

//    [data3] => Array
//        (
//            [0] => Mahmut
//            [1] => Müjde
//        )

//    [0] => 1
//    [1] => 2
//    [2] => 3
//    [3] => 4
//    [4] => 5
//    [5] => 6
// )


    ?>
</body>
</html>