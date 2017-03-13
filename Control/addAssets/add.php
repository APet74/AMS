<?php 
session_start();
require_once("../../config.php");
if($_POST['quantity'] > 1){
	$loopCounter = $_POST['quantity'];
}else{
	$loopCounter = 1;
}
for($i = 0; $i < $loopCounter; $i++){
	if($_POST['computerName'] != ""){
			echo "came here";
			$insertComputer = "INSERT INTO computers (computerName, operatingSys) VALUES (:computerName, :operatingSys)";
			$stmt = $dbh->prepare($insertComputer);
			$stmt->BindValue(":computerName", $_POST['computerName']);
			$stmt->BindValue(":operatingSys", $_POST['operatingSystem']);
			$stmt->Execute();
			$lastPCID = $dbh->lastInsertID();
			$insertQuery = "INSERT INTO items (location, warrantyExp, manufacturer, computerID, price, description, createdBy, retiredStatus, type, serialNum, currentUser) VALUES (:location, :warrantyExp, :manufacturer, :computerID, :price, :description, :createdBy, :retiredStatus, :type, :serialNum, :currentUser)";
			$stmt = $dbh->prepare($insertQuery);
			$stmt->BindValue(":location", $_POST['location']);
			$stmt->BindValue("warrantyExp", $_POST['warrantyExperiation']);
			$stmt->BindValue(":manufacturer", $_POST['manufacturer']);
			$stmt->BindValue(":computerID", $lastPCID);
			$stmt->BindValue(":price", $_POST['price']);
			$stmt->BindValue(":description", $_POST['description']);
			$stmt->BindValue(":createdBy", $_SESSION['sess_username']);
			$stmt->BindValue(":retiredStatus", 0);
			$stmt->BindValue(":type", $_POST['assetType']);
			$stmt->BindValue(":serialNum", $_POST['serialNumber']);
			$stmt->BindValue(":currentUser", $_POST['currentUser']);
			$stmt->Execute();
		} else {
			$insertQuery = "INSERT INTO items (location, warrantyExp, manufacturer, price, description, createdBy, retiredStatus, type, serialNum, currentUser) VALUES (:location, :warrantyExp, :manufacturer, :price, :description, :createdBy, :retiredStatus, :type, :serialNum, :currentUser)";
			$stmt = $dbh->prepare($insertQuery);
			$stmt->BindValue(":location", $_POST['location']);
			$stmt->BindValue("warrantyExp", $_POST['warrantyExperiation']);
			$stmt->BindValue(":manufacturer", $_POST['manufacturer']);
			$stmt->BindValue(":price", $_POST['price']);
			$stmt->BindValue(":description", $_POST['description']);
			$stmt->BindValue(":createdBy", $_SESSION['sess_username']);
			$stmt->BindValue(":retiredStatus", 0);
			$stmt->BindValue(":type", $_POST['assetType']);
			$stmt->BindValue(":serialNum", $_POST['serialNumber']);
			$stmt->BindValue(":currentUser", $_POST['currentUser']);
			$stmt->Execute();
		}
}


header("location: ../../addAssets.php?Msg=Completed Successfully");


?>