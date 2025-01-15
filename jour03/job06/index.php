<?php
$str = "Les choses que l'on possède finissent par nous posséder";

$r = "";

for ($i = 0; isset($str[$i]); $i++) {
    $r = $str[$i] . $r; 
}

echo $r;
?>





