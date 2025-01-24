<?php

$pdo = NEW PDO("mysql:host=localhost;dbname=jour8", "root", "");

$req = $pdo->prepare("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
FROM salles
JOIN etage ON salles.id_etage = etage.id;");
$req->execute();

$res = $req->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job13</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        thead {
            background-color: grey;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Salle</th>
                <th>Etage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($res as $array) {
                echo "<tr>
                        <td>{$array['nom_salle']}</td>
                        <td>{$array['nom_etage']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

