<?php
require_once("../../config.php");
require_once("../../Bcrypt.php");
if($_POST['password'] == $_POST['passwordConf']){
	$updateQuery = "UPDATE users SET password = :password WHERE username = :username";
	$stmt = $dbh->prepare($updateQuery);
	$hash = Bcrypt::hashPassword($_POST['password']);
	$stmt->bindValue(":password", $hash);
	$stmt->bindValue(":username", $_POST['username']);
	$stmt->execute();
	header("location:../../addAccounts.php?Msg=Password Updated!");
}else{
	header("location:../../addAccounts.php?Msg=Passwords didn't Match!");
}
?>