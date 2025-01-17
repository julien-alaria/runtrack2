<?php

    

    foreach($_POST as $key => $value){
        echo    "<table>";
        echo    "<tr>";
        echo    "<td>".$key."</td>";
        echo    "<td>".$value."</td>";
        echo    "</tr>";
        echo    "</table>";
    }
    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="index.php" method="post">
        <input type="text" name="nom"><br>
        <input type="text" name="prenom"><br>
        <input type="submit" value="submit"><br>
    </form>

   


</body>
</html>
