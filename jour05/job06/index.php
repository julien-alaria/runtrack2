<?php

function leek($str){

    $resultat = "";
    $i = 0;

    while(isset($str[$i])){
       
        if($str[$i] == "a"){
            $resultat .= "4";
        }
        if($str[$i] == "b"){
            $resultat .= "8";
        }
        if($str[$i] == "c"){
            $resultat .= "[)";
        }
        if($str[$i] == "e"){
            $resultat .= "3";
        }
        if($str[$i] == "f"){
            $resultat .= "|=";
        }
        if($str[$i] == "g"){
            $resultat .= "6";
        }
        if($str[$i] == "h"){
            $resultat .= "#";
        }
        if($str[$i] == "i"){
            $resultat .= "1";
        }
        if($str[$i] == "k"){
            $resultat .= "X";
        }
        if($str[$i] == "l"){
            $resultat .= "1";
        }
        if($str[$i] == "m"){
            $resultat .= "|v|";
        }
        if($str[$i] == "n"){
            $resultat .= "^/";
        }
        if($str[$i] == "o"){
            $resultat .= "0";
        }
        if($str[$i] == "p"){
            $resultat .= "V";
        }
        if($str[$i] == "q"){
            $resultat .= "(_,)";
        }
        if($str[$i] == "r"){
            $resultat .= "2";
        }
        if($str[$i] == "s"){
            $resultat .= "5";
        }
        if($str[$i] == "t"){
            $resultat .= "7";
        }
        if($str[$i] == "u"){
            $resultat .= "(_)";
        }
        if($str[$i] == "v"){
            $resultat .= "\/";
        }
        if($str[$i] == "w"){
            $resultat .= "\/\/";
        }
        if($str[$i] == "x"){
            $resultat .= "><";
        }
        if($str[$i] == "y"){
            $resultat .= "7";
        }
        if($str[$i] == "z"){
            $resultat .= "≥";
        }

        $i++;  
    }

    return $resultat;
}

$str = "merci";
echo leek($str);
?>
