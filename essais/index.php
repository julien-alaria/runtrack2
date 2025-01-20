<?php
echo " Hello PHP"."<br>";


//job 02
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$i = 0;
while (isset($str[$i])){
    echo $str[$i];
    $i += 2;
}


//job 03
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouAEIOU";

$i = 0;
while (isset($str[$i])){
    if ($i == $voyelles){
        echo $i;
    }
}


// job 04
$str = "Dans l'espace personne ne vous entend crier";

$i = 0;
while (isset($str[$i])){

}
?>

<!-- job 05 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$str = "On est pas le meilleur quand on le croit mais quand on le sait";

$count_c = 0;
$count_v = 0;

for ($i = 0; isset($str[$i]); $i++){
    if ($str[$i] == "a" or $str[$i] == "e" or $str[$i] == "i" or $str[$i] == "o" or $str[$i] == "u" or $str[$i] == "y"){
        $count_v += 1;
    }else $count_c +=1;

}

$dic = array("consonnes" => $count_c, "voyelles" => $count_v);
?>

<tr>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td><?php echo $count_v ?></td>
                    <td><?php echo $count_c ?></td>
                </tr>
            </tbody>
    </table>
</tr>

</body>
</html>
