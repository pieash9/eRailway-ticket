<?php
require_once("../core/configure.php");

$FirstName = htmlentities( $_REQUEST["first_name"]);
$LastName = htmlentities($_REQUEST["last_name"]) ;
$Email = htmlentities($_REQUEST["email"]);
$Mobile_Number = htmlentities($_REQUEST["mobile_number"]);
$Password = htmlentities($_REQUEST["password"]) ;
$ConfrirmPassword = htmlentities($_REQUEST["confrim_password"]) ;

$EncryptedPassword = md5(sha1($Password));
$authToken = md5(sha1($Password.$Email));

$NidNumber = htmlentities($_REQUEST["nid_number"]) ;
$PostCode = htmlentities($_REQUEST["post_code"]) ;
$Address = htmlentities($_REQUEST["address"]) ;

if($Password == $ConfrirmPassword){


$InsertRegisterData = "INSERT INTO registration (first_name,last_name,email,mobile_number,password,authToken,nid_number,post_code,address) VALUES('$FirstName','$LastName','$Email','$Mobile_Number','$EncryptedPassword','$authToken','$NidNumber','$PostCode','$Address')";

$runQuery = mysqli_query($connect,$InsertRegisterData);

if($runQuery){

    $_SESSION['status'] = "Registered successfully";
    header("location: ../registration.php?done_registration=Registration Successful");
}
else{
    $_SESSION['status'] = "Registered failed";
    header("location: ../registration.php?done_registration=Registration failed");
}
}else{
    $_SESSION['status'] = "password don't match";
    header("location: ../registration.php?done_registration=Registration failed");
}
?>