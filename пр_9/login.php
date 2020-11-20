<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Login</title>
    <style>
        .container {
            width: 400px;
            padding-top: 3em;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="auth.php" method="post">
            <input type="text" name="login" placeholder="login" /><br>
            <input type="password" name="password" placeholder="password" /><br>
            <input type="submit" class="btn"/>
        </form>
    </div>
</body>
</html>