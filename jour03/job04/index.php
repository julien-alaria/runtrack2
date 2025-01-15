<?php

$str = "Dans l'espace, personne ne vous enrend crier";
$i = 0;


for ($j = 0; isset($str[$i]); $i++)
{
    $j++;
}

echo $j;
