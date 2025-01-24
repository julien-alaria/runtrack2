<!-- <?php
$pdo = new PDO("mysql:host=localhost; dbname=jour8", "root", "");

 $req = $pdo -> prepare("SELECT nom, capacite FROM salles");
 $req -> execute();
 $res = $req->fetchAll(PDO::FETCH_ASSOC);

 var_dump($res)

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
                <th>Nom</th>
                <th>Capacite</th>
            </tr>
        </thead>
    </table>
</body>

</html> -->

<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour8", "root", "");

$req = $pdo->prepare("SELECT nom, capacite FROM salles");
$req->execute();
$res = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
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
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($res as $array) {
                echo "<tr>
                        <td>{$array['nom']}</td>
                        <td>{$array['capacite']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
