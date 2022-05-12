<?php
include "functions.php";
$sql = "SELECT * FROM user";
$query = mysqli_query($db, $sql);
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);
$index = 0;

include "index.view.php";