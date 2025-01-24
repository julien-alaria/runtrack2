<?php

if (isset($_COOKIE["nbvisites"])){
    $count = $_COOKIE["nbvisites"] +1;
}else{
    $count = 1;
}

setcookie("nbvisites", $count, time()+3600);

if (isset($_POST["reset"])){
    $count = setcookie("nbvisites", 0, time()+3600);
}

var_dump($_COOKIE);

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