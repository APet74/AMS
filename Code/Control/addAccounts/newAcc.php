<?php 
require_once("../../config.php");
require_once("../../Bcrypt.php");
if($_POST['password'] == $_POST['passwordConf']){
	$insert = "INSERT INTO users (username, email, password, accountLevel) VALUES (:username, :email, :password, :accountLevel)";
	$stmt = $dbh->prepare($insert);
	$hash = Bcrypt::hashPassword($_POST['password']);
	$stmt->bindValue(":username", $_POST['username']);
	$stmt->bindValue(":email", $_POST['email']);
	$stmt->bindvalue(":password", $hash);
	$stmt->bindValue(":accountLevel", $_POST['accountLevel']);
	$stmt->execute();
	
	header("Location: ../../addAccounts.php?Msg=Account Added!");
}else{
	header("Location: ../../addAccounts.php?Msg=Passwords Don't Match!");
}





?>