<?php

$i = 0;

foreach($_GET as $key => $value){
    $i++;
}
echo "nombre d'arguments: ".$i


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="$_POST">
        <input type="text" name="nom"><br>
        <input type="text" name="prenom"><br>
        <input type="text" name="age"><br>
        <input type="text" name="adresse"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>

