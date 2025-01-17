<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job06</title>
</head>

<body>

    <form action="" method="get">

        <input type="text" name="nombre" placeholder="Entrez un nombre:"><br><br>
        <button type="submit">Envoyer</button>

    </form>

    <?php
    
    if (!empty($_GET['nombre'])) {
        if ($_GET['nombre'] % 2 == 0) {
            echo "nombre pair";
        } else {
            echo "nombre impair";
        }
    }
    ?>
</body>
</html>
