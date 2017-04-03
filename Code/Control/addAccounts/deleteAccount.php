<?php
require_once("../../config.php");
	$updateQuery = "DELETE FROM users WHERE username = :username";
	$stmt = $dbh->prepare($updateQuery);
	$stmt->bindValue(":username", $_POST['username']);
	$stmt->execute();
	header("location:../../addAccounts.php?Msg=Account Deleted!");
?>