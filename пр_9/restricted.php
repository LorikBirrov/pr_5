<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Restricted</title>
</head>
<body>
    
    <?php
    
    if ($_SESSION["auth"]):
        echo "you are signed in";
    else:
    ?>
        <a href="login.php">Login</a>
       
    <?php endif?>

</body>
</html>