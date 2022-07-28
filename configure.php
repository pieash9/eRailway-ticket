<?php

$host = "localhost";
$dbuser = "pieash9";
$dbpassword = "kingsman";
$dbname = "pieash_test";

$connect = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($connect == flase){
    echo "<h1>Error! Database not connected</h1>";
}

?>