<?php 
session_start();
require_once("../../config.php");
	if($_POST['computerName'] != ""){
		$insertComputer = "UPDATE computers SET computerName = :computerName, operatingSys = :operatingSys WHERE computerID = :computerID";
		$stmt = $dbh->prepare($insertComputer);
		$stmt->BindValue(":computerName", $_POST['computerName']);
		$stmt->BindValue(":operatingSys", $_POST['operatingSystem']);
		$stmt->BindValue(":computerID", $_POST['computerID']);
		$stmt->Execute();
	} 
	$updateAsset = "UPDATE items SET location = :location, warrantyExp = :warrantyExp, manufacturer = :manufacturer, price = :price, description = :description, retiredStatus = :retiredStatus, serialNum = :serialNum, currentUser = :currentUser WHERE itemID = :itemID";
			$stmt = $dbh->prepare($insertQuery);
			$stmt->BindValue(":location", $_POST['location']);
			$stmt->BindValue("warrantyExp", $_POST['warrantyExperiation']);
			$stmt->BindValue(":manufacturer", $_POST['manufacturer']);
			$stmt->BindValue(":price", $_POST['price']);
			$stmt->BindValue(":description", $_POST['description']);
			if(strtolower($_POST['retiredStatus']) == 'yes'){
				$stmt->BindValue(":retiredStatus", 1);
			}else{
				$stmt->BindValue(":retiredStatus", 0);
			}
			$stmt->BindValue(":serialNum", $_POST['serialNumber']);
			$stmt->BindValue(":currentUser", $_POST['currentUser']);
			$stmt->BindValue(":itemID", $_POST['itemID']);
			$stmt->Execute();


header("location: ../../listAssets.php?Msg=Completed Successfully");


?>