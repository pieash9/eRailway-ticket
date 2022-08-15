<?php

require_once("../core/configure.php");

$userInputEmail =  $_REQUEST["email"];
$userInputPassword =  $_REQUEST["password"];


$createAuth = md5(sha1($userInputPassword.$userInputEmail));

$matchQuery = "SELECT * FROM registration WHERE authToken='$createAuth'";
$runmatchQuery = mysqli_query($connect, $matchQuery);
$checkCounts = mysqli_num_rows($runmatchQuery);


if ($runmatchQuery == true) {

    if ($checkCounts === 1) {
        // setcookie("currentUser", $createAuth, time() + (86400 * 7));
        header("location: ../login.php?login_success");
    } else {
        header("location: ../login.php?Wrong_info");
    }
}
?>