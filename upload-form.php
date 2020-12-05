<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Sign in</title>
    <style>
        .container {
            width: 400px;
            padding-top: 3em;
        }
    </style>
</head>
<body>
    <nav>
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#"><strong>Upload new</strong></a></li>
            <li><a href="table.php">Table</a></li>
        </ul>
    </div>
    </nav>
    <div class="container">
    <h2 class="header">Upload Image</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
	        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <button type="submit" name="submit" class="btn waves-effect waves-lig">Upload</button>
        </form>
    </div>
</body>
</html>