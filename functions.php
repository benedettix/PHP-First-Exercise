<?php 

function dd($val) {
    echo "<pre>";
    die(var_dump($val));

    echo "</pre>";
}

$db = mysqli_connect("localhost", "root","","users") or die("doesnt work f..");

?>