<?php
print("hoeveel activiteiten wil je toevoegen");
$hoeveel = readline(":");

if (is_numeric($hoeveel)) { 
$list= array();
 } 
 

 else { 
print_r("is geen getal");
 exit(); }


for ($i=1; $i <=$hoeveel ; $i++) { 
 	print_r("wat wil je toevoegen aan je bucket list");
 	$keuze= readline(":");
 	array_push($list, $keuze);
}
print_r("in je bucket list zit:");

print_r($list);

