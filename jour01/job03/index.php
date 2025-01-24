<?php

$bool = true;
$int = 7;
$float = 7.77;
$str = "Hello";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
    <style>
        table{
            width: 50%;
            border-collapse: collapase;
            margin: 20px auto;
        }

        th, td{
            border: 1px solid;
            text-align: center;
            padding: 8px;
        }
        
        th{
            background-color: #f4f4f4;
        }
        </style>
</head>


<body>
    <form method="post" action="traitement.php">
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>Booléen</td>
                <td>$bool</td>
                <td><?= htmlspecialchars($bool); ?></td>
            </tr>

            <tr>
                <td>Entier</td>
                <td>$int</td>
                <td><?= htmlspecialchars($int); ?></td>
            </tr>

            <tr>
                <td>Flottant</td>
                <td>$float</td>
                <td><?= htmlspecialchars($float); ?></td>
            </tr>

            <tr>
                <td>Chaîne</td>
                <td>$str</td>
                <td><?= htmlspecialchars($str); ?></td>
            </tr>

        </tbody>
    </table>
</body>
</html>
