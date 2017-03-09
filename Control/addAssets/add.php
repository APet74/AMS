<?php 
	require_once("../../config.php");
	$insertQuery = "INSERT INTO items (location, warrantyExp, manufacturer, price, description, createdBy, retiredStatus, type, serialNum, currentUser) VALUES (:location, :warrantyExp, :manufacturer, :price, :description, :createdBy, :retiredStatus, :type, :serialNum, :currentUser)";
	$stmt = $dbh->prepare($insertQuery);
	$stmt->BindValue(":location", $_POST['location']);
	$stmt->BindValue("LwarrantyExp", $_POST['warrantyExperation']);
	$stmt->BindValue(":manufacturer", $_POST['manufacturer']);
	$stmt->BindValue(":price", $_POST['price']);
	$stmt->BindValue(":description", $_POST['description']);
	$stmt->BindValue(":createdBy", $_SESSION['sess_username']);
	$stmt->BindValue(":retiredStatus", 0);
	$stmt->BindValue(":type", $_POST['assetType']);
	$stmt->BindValue(":serialNum", $_POST['serialNumber']);
	$stmt->BindValue(":currentUser", $_POST['currentUser']);
	$stmt->Execute();

	if(isset($_POST['computerName'])){
		$insertComputer = "INSERT INTO computers (computerName, operatingSys) VALUES (:computerName, :operatingSys)";
		$stmt = $dbh->prepare($insertComputer);
		$stmt->BindValue(":computerName", $_POST['computerName']);
		$stmt->BindValue(":operatingSys", $_POST['operatingSystem']);
		$stmt->Execute();
		$updateQuery = "UPDATE computers PC, items AMS SET AMS.computerID = PC.computerID WHERE PC.computerName = :computerName";
		$stmt = $dbh->prepare($updateQuery);
		$stmt->BindValue(":computerName", $_POST['computerName']); //test bug here with multiple id's possible since computerName isn't unique
		$stmt->Execute();
	}	
	echo "Done????";


?>