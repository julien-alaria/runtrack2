<?php

$pdo = NEW PDO ("mysql:host=localhost;dbname=jour8", "root", "");

$req = $pdo->prepare("SELECT SUM(superficie) AS superficie_totale FROM etage");
$req->execute();

$res = $req->fetch(PDO::FETCH_ASSOC);

var_dump($res);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
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
           
            <th>Superficie_totale</th>
           
        </thead>
        <tbody>
           
   
            
            <td><?php echo $res['superficie_totale']; ?></td>
        
        </tbody>
    </table>
</body>
</html>




