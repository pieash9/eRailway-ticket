<?php
require_once("../core/configure.php");

$Name = htmlentities( $_REQUEST["name"]);
$Email = htmlentities($_REQUEST["email"]) ;
$Subject = htmlentities($_REQUEST["subject"]);
$Message = htmlentities($_REQUEST["message"]);




$InsertcontactData = "INSERT INTO contact_us (name,email,subject,message) VALUES('$Name','$Email','$Subject','$Message')";

$runQuery = mysqli_query($connect, $InsertcontactData);

if($runQuery){

    $_SESSION['status'] = "Message sent successfully";
    header("location: ../contactUs.php?message sent successfully");
}
else{
    $_SESSION['status'] = "Message sent failed";
    header("location: ../contactUs.php?Message send failed");
}
