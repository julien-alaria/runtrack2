<?php

$pdo = NEW PDO("mysql:host=localhost;dbname=jour8","root","");

$req = $pdo->prepare("SELECT COUNT(*) AS total_etudiants FROM etudiants");


$req->execute();

$res = $req->fetch(PDO::FETCH_ASSOC);

var_dump($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job06</title>
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
                <th>Nombre d'etudiants</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $res['total_etudiants']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

