<?php

$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

echo "<pre>";

print_r($names);

echo "</pre>";

$total = array_splice($names,4);

echo "<pre>";

print_r($total);

echo "</pre>";

echo "<pre>";

print_r($names);

echo "</pre>";

$names = array("A1"=>"Volkan","A2"=>"Onur","A3"=>"Levent","A4"=>"Serkan","A5"=>"Hakan","A6"=>"Eray","A7"=>"Ümit","A8"=>"Özgür");

echo "</pre>";

$total = array_splice($names,4);

echo "<pre>";

print_r($total);

echo "</pre>";

echo "<pre>";

print_r($names);

echo "</pre>";

$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

array_splice($names,1,4);

echo "<pre>";

print_r($names);

echo "</pre>";


$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

$values = array_splice($names,1,2);

echo "<pre>";

print_r($names);

echo "</pre>";

$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

$values = array_splice($names,1,2,"Recep");

echo "<pre>";

print_r($names);

echo "</pre>";

$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

$values = array_splice($names,1,6,array("Ahmet","Mehmet","Mahmut"));

echo "<pre>";

print_r($names);

echo "</pre>";


$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

$values = array_splice($names,0,count($names),array("Ahmet","Mehmet","Mahmut"));

echo "<pre>";

print_r($names);

echo "</pre>";

$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

$values = array_splice($names,0,-2,array("Ahmet","Mehmet","Mahmut"));

echo "<pre>";

print_r($names);

echo "</pre>";

$names = array("Volkan","Onur","Levent","Serkan","Hakan","Eray","Ümit","Özgür");

$values = array_splice($names,3,0,array("Ahmet","Mehmet","Mahmut"));

echo "<pre>";

print_r($names);

echo "</pre>";

?>