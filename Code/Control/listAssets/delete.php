<?php 
session_start();
require_once("../../config.php");
require_once("../../resources/userAdmin.php");

	$selectComputer = "SELECT computerID FROM items WHERE itemID = :itemID";
	$stmt = $dbh->prepare($selectComputer);
	$stmt->bindValue(":itemID", $_GET['ID']);
	$stmt->execute();
	$item = $stmt->fetch(PDO::FETCH_ASSOC);
	if($item['computerID'] != 0){
		$deleteComputer = "DELETE FROM computers WHERE computerID = :computerID";
		$stmt = $dbh->prepare($deleteComputer);
		$stmt->bindValue(":computerID", $item['computerID']);
		$stmt->execute();
	}
	$deleteItem = "DELETE FROM items WHERE itemID = :itemID";
	$stmt = $dbh->prepare($deleteItem);
	$stmt->bindValue(":itemID", $_GET['ID']);
	$stmt->execute();



header("location: ../../listAssets.php?Msg=Deleted Successfully");


?>