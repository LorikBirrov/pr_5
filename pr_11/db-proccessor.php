<?php

require_once("connection.php");

function insert($image) {

$conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);


    $sql = "INSERT INTO `users` (`id`, `img`) VALUES (NULL, '$image')";

    $result = $conn->query($sql);

    if (!$result)
        echo $conn->error;

}

function getAll() {
  
    $conn = new mysqli($servername, $username, $password, $db);
    
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);


    $sql = "SELECT * FROM `users`";

    $result = $conn->query($sql);

    if (!$result)
        echo $conn->error;

    return $result;

}

?>