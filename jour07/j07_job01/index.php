<?php

session_start();

if (!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 0;
}

if (isset($_POST["reset"])){
    $_SESSION["nbvisites"] = 0;
}else{
    $_SESSION["nbvisites"] ++;
}

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <button type="submit" name="reset">Reset</button>
    </form>
    
</body>
</html>