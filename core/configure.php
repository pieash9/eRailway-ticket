<?php

$host = "localhost";
$dbuser = "pieash";
$dbpwd = "@limon_3214";
$dbname = "erailwaybd_db";

$connect = mysqli_connect($host, $dbuser, $dbpwd, $dbname);
if ($connect == false) {
    echo "<h1>Error!! Database not connected</h1>!";
}

?>