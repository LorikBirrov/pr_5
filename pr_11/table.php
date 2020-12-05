<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    <nav>
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="upload-form.php">Upload new</a></li>
            <li><a href="#"><strong>Table</strong></a></li>
        </ul>
    </div>
    </nav>
    <?php

    require_once("db-proccessor.php");

    $result = getAll();

    ?>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows() > 0): ?>
            <?php  while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><img src="<?php $row["img"]?>" alt=""></td>
            </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </tbody>
    </table>


</body>
</html>