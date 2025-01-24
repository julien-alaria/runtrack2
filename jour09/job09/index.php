<?php

$pdo = NEW PDO("mysql:host=localhost;dbname=jour8", "root", "");

$req = $pdo->prepare("SELECT * FROM salles  ORDER BY capacite DESC;");
$req->execute();

$res = $req->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job09</title>
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
                <th>Nom</th>
                <th>Etage</th>
                <th>Capacite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($res as $array) {
                echo "<tr>
                        <td>{$array['nom']}</td>
                        <td>{$array['id_etage']}</td>
                        <td>{$array['capacite']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
