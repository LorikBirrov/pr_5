<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $_SESSION["auth"] = false;

    if ($_POST["login"] === "admin" and $_POST["password"] === "1111") {
        $_SESSION["auth"] = true;
    }

    header("Location: restricted.php");
    exit;
    
    ?>

</body>
</html>