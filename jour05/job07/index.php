<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <label for="nom">nom</label>
        <input type="text" name="nom">
        <input type="submit">


    </form>
    <!-- <form action="index.php" method="post">
    Champ texte pour le nom
    <!-- <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br> -->

    <!-- Menu déroulant multiple pour le format des images -->
    <!-- <label for="formats">Format de vos images :</label>
    <select id="formats" name="formats[]" multiple>
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select><br><br> -->

    <!-- Bouton de soumission -->
    <!-- <input type="submit" value="Submit"><br>
</form> --> -->

</body>

</html>


<?php

if (isset($_GET["nom"])){
    echo "Bonjour ". $_GET["nom"];
}

if (isset($_GET["secret"]) && !empty($_GET["secret"]) && ($_GET["secret"] === "Julien")){
    echo "tu as trouvé le secret";
}
?>

