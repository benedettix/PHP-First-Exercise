<?php

include "functions.php";
$sql = "SELECT * FROM user";
$query = mysqli_query($db, $sql);
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);
include "partials/head.php";
include "partials/navbar.php";

include "add_account.view.php";
include "partials/bottom.php";