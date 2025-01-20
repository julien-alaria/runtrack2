<?php
// Définir la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Initialiser une chaîne pour stocker le résultat
$resultat = "";

// Parcourir la chaîne en décalant les caractères
$i = 0;
while (isset($str[$i])) {
    // Si ce n'est pas le dernier caractère, remplacez-le par le suivant
    if (isset($str[$i + 1])) {
        $resultat .= $str[$i + 1];
    } else {
        // Pour le dernier caractère, remplacez-le par le premier
        $resultat .= $str[0];
    }
    $i++;
}

// Afficher le résultat
echo $resultat;
?>
