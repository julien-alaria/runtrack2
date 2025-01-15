<?php

$str = "I'm sorry Dave i'm afraid i can't do that";

$i = 0;

while (isset($str[$i])){
    $value = $str[$i];
     
    if ($value == "a" || $value == "e" || $value == "i" || $value == "o" || $value == "u" || $value == "y" ||
        $value == "A" || $value == "E" || $value == "I" || $value == "O" || $value == "U" || $value == "Y")
        {
            echo $value ."<br>";
        }

        $i++;

}
    



