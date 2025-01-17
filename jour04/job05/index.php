<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
</head>

<body>

    <form action="" method="post">

        <input type="text" name="username"><br><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Envoyer</button>

    </form>

    <?php
    
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        if ($_POST['username'] === "john" && $_POST['password'] === "rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>
</body>
</html>

