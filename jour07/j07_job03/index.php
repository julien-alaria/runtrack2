<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07_Job03</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <button type="submit">Enter</button>
        <button type="submit" name="reset" value="true">Reset</button>
    </form>

</body>
</html>

<?php

session_start();

if (isset($_POST["reset"])) {
    $_SESSION["nom_personne"] = [];
}


if (!empty($_POST["nom"])) {
    $nom = ($_POST["nom"]); 
    if (!isset($_SESSION["nom_personne"]) || !is_array($_SESSION["nom_personne"])) {
        $_SESSION["nom_personne"] = [];
    }
    $_SESSION["nom_personne"][] = $nom;
}

var_dump($_SESSION["nom_personne"]);
?>

