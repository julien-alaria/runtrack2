<?php

function occurence($str, $car){
    $j = 0;
    for($i = 0; isset($str[$i]); $i++){
        if($str[$i] == $car){
            $j++;
        }
    }
  return $j;
}

$str = "Bonjour";
$car = "o";

echo occurence($str, $car);
?>

