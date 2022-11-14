<?php

$hostname = "localhost";
$dbusername = "atikulmy_bongouser";
$password = "UO(gK0_0ZtBB";
$database = "atikulmy_bongodb";

$con = mysqli_connect($hostname,$dbusername,$password,$database);

if (mysqli_connect_errno()){
    echo "Connection Faild <br> " . mysqli_connect_error();
} else {
    echo "Database Connected";
}

?>