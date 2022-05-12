<?php

include "functions.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $created_for = $_POST["created_for"];
    $sql = "INSERT INTO user VALUES(NULL, '$username','$password',current_timestamp,'Luka','$created_for')";
    $query = mysqli_query($db,$sql);
    header("Location: index.php");
  }

