<?php

$names = array("Volkan","Hakan","Onur","Serkan","Levent","Ümit","Eray","Özgür");

echo "<pre>";

print_r($names); 

echo "</pre>";

$total = array_slice($names,3);

echo "<pre>";

print_r($total);

echo "</pre>";

$names = array("A1"=>"Volkan","A2"=>"Hakan","A3"=>"Onur","A4"=>"Serkan","A5"=>"Levent","A6"=>"Ümit","A7"=>"Eray","A8"=>"Özgür");

$total = array_slice($names,3);

echo "<pre>";

print_r($total);

echo "</pre>";

$names = array(0=>"Volkan",1=>"Hakan",3=>"Onur",2=>"Serkan",6=>"Levent",5=>"Ümit",7=>"Eray",4=>"Özgür");

$total = array_slice($names,3);

echo "<pre>";

print_r($total);

echo "</pre>";

$names = array(0=>"Volkan",1=>"Hakan",3=>"Onur",2=>"Serkan",6=>"Levent",5=>"Ümit",7=>"Eray",4=>"Özgür");

$total = array_slice($names,3,2);

echo "<pre>";

print_r($total);

echo "</pre>";

$names = array("A1"=>"Volkan","A2"=>"Hakan","A3"=>"Onur","A4"=>"Serkan","A5"=>"Levent","A6"=>"Ümit","A7"=>"Eray","A8"=>"Özgür");

$total = array_slice($names,1,4);

echo "<pre>";

print_r($total);

echo "</pre>";

$total = array_slice($names,-3,2);

echo "<pre>";

print_r($total);

echo "</pre>";

$names = array("Volkan","Hakan","Onur","Serkan","Levent","Ümit","Eray","Özgür");

$total = array_slice($names,-3,2,TRUE);

echo "<pre>";

print_r($total);

echo "</pre>";

$total = array_slice($names,-3,-3,TRUE);

echo "<pre>";

print_r($total);

echo "</pre>";

?>