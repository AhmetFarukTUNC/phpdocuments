<?php

// Explode is a function defined as particular.Explode is splitting according to parameter and convert to array this value.

// Example 1 : 

$ADSOYAD = "Ahmet Faruk TUNÇ";

$newarray = explode(" ",$ADSOYAD);
echo "<pre>";
print_r($newarray);
echo "</pre>";

// Example 2 : 

$teams = "fenerbahce,galatasaray,trabzon,beşiktaş kocaelispor";

$teamarray = explode(" ",$teams);

echo "<pre>";

print_r($teamarray);

echo "</pre>";

// Example 3 : 

$teams = "fenerbahce,galatasaray,trabzon,beşiktaş kocaelispor";

$teamarray = explode(",",$teams,3); # It prints as 3 value.

echo "<pre>"; # Pre is html tag and prints value as sorting.

print_r($teamarray);

echo "</pre>";

$teams = "fenerbahce,galatasaray,trabzon,beşiktaş kocaelispor";

$teamarray = explode(",",$teams,-1); # It removes last element.

echo "<pre>";

print_r($teamarray);

echo "</pre>";

?>