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
       $teams = array(array("foundingyear"=>1907,"teamname"=>"fenerbahçe"),array("foundingyear"=>1905,"teamname"=>"galatasaray"),array("foundingyear"=>1903,"teamname"=>"beşiktaş"));

       echo "<pre>";

       print_r($teams);

       echo "</pre>";

       $result = array_column($teams,"teamname");

       echo "<pre>";

       print_r($result);

       echo "</pre>";

       $result = array_column($teams,"foundingyear");

       echo "<pre>";

       print_r($result);

       echo "</pre>";

       $result = array_column($teams,"foundingyear","teamname");

       echo "<pre>";

       print_r($result);

       echo "</pre>";

    ?>
</body>
</html>