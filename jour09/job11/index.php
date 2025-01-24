<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour8", "root", "");

// Requête SQL pour récupérer la capacité moyenne
$req = $pdo->prepare("SELECT AVG(capacite) AS capacite_moyenne FROM salles");
$req->execute();

// Récupérer le résultat de la requête
$res = $req->fetch(PDO::FETCH_ASSOC);

// Déboguer pour vérifier les résultats
var_dump($res);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job011</title>
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
                <th>Capacité Moyenne</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $res["capacite_moyenne"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
