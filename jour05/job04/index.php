<?php

function calcule($a, $b, $c){
        if($b == "+"){
        return $a. " + ". $c. " = ". $a + $c;
        }
}

echo calcule(2, "+", 5);
?>
