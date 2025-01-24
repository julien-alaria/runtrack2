<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour10", "root", "");

$req = $pdo -> prepare("SELECT * FROM etudiants");
$req -> execute();
$res = $req->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);

var_dump($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
        text-align: center;
    }
    th, td{
        padding: 10px;
        border: 1px solid black;
    }
    thead{
        background-color: grey;
    }
</style>
<body>
    <table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>
    </thead>
        <tbody>
            <?php
            foreach ($res as $array){

                echo "<tr>

                    <td>{$array["prenom"]}</td>
                    <td>{$array["nom"]}</td>
                    <td>{$array["naissance"]}</td>
                    <td>{$array["sexe"]}</td>
                    <td>{$array["email"]}</td>
            
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>