<?php

require_once("../core/configure.php");

$FirstName = htmlentities( $_REQUEST["first_name"]);
$LastName = htmlentities($_REQUEST["last_name"]) ;
$Email = htmlentities($_REQUEST["email"]);
$Mobile_Number = htmlentities($_REQUEST["mobile_number"]);
$Password = htmlentities($_REQUEST["password"]) ;
$EncryptedPassword = md5(sha1($Password));
$authToken = md5(sha1($Password.$Email));

$NidNumber = htmlentities($_REQUEST["nid_number"]) ;
$PostCode = htmlentities($_REQUEST["post_code"]) ;
$Address = htmlentities($_REQUEST["address"]) ;

$InsertRegisterData = "INSERT INTO registration (first_name,last_name,email,mobile_number,password,authToken,nid_number,post_code,address) VALUES('$FirstName','$LastName','$Email','$Mobile_Number','$EncryptedPassword','$authToken','$NidNumber','$PostCode','$Address')";

$runQuery = mysqli_query($connect,$InsertRegisterData);
if($runQuery == true){
    header ("location: ../login.php?done_registration=Registration Successful");
}
?>