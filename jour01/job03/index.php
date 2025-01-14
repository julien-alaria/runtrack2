<?php
// Déclaration des variables
$bool = true;               
$integer = 42;              
$string = "Hello LaPlateforme!";  
$float = 3.14;              

// Début du tableau HTML
echo "<table border='1' style='border-collapse: collapse; width: 50%; text-align: left;'>";
echo "<thead>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Ligne pour chaque variable
echo "<tr>";
echo "<td>boolean</td>";
echo "<td>booleen</td>";
echo "<td>" . ($bool ? "true" : "false") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>integer</td>";
echo "<td>nombre_entier</td>";
echo "<td>$integer</td>";
echo "</tr>";

echo "<tr>";
echo "<td>string</td>";
echo "<td>chaine_de_caractere</td>";
echo "<td>$string</td>";
echo "</tr>";

echo "<tr>";
echo "<td>float</td>";
echo "<td>nombre_a_virgule</td>";
echo "<td>$float</td>";
echo "</tr>";

// Fin du tableau HTML
echo "</tbody>";
echo "</table>";
?>

