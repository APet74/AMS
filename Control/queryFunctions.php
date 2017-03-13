<?php
require_once("class.asset.php");
require_once("class.computer.php");
function arrayItemObjects($dbh){
		$array = array();
	    $result = $stmt = "SELECT * FROM items";
	    $query = $dbh->prepare($stmt);
	    $query->execute();
	    $items = $query->fetchAll(PDO::FETCH_ASSOC);
	    foreach($items as $item){
	    	if($item['computerID'] != 0){
	    		$query = "SELECT * FROM computers WHERE computerID = :computerID";
	    		$stmt = $dbh->prepare($query);
	    		$stmt->BindValue(":computerID", $item['computerID']);
	    		$stmt->execute();
	    		$id = $stmt->fetch(PDO::FETCH_ASSOC);
	    		$pcObj = new computer($id);
	    	}else{
	    		$pcObj = NULL;
	    	}
	    	$asset = new asset($item, $pcObj);
	    	array_push($array, $asset);
	    }
	    return $array;
}

function generateAjax($objects){
	$result = count($objects);
	$fileM = fopen("txt/ajaxList.txt", "w");
	$topLine = "{\n\t\"data\": [";
	fwrite($fileM, $topLine);
	$i = 0;
	foreach($objects as $item){
		$i++;
		fwrite($fileM, "\t\t{\n");
		fwrite($fileM, "\t\t\t\"accountLevel\": \"{$_SESSION['status']}\",\n");
		fwrite($fileM, "\t\t\t\"itemID\": \"{$item->get("itemID")}\",\n");
		fwrite($fileM, "\t\t\t\"location\": \"{$item->get("location")}\",\n");
		fwrite($fileM, "\t\t\t\"warrantyExp\": \"{$item->get("warrantyExp")}\",\n");
		fwrite($fileM, "\t\t\t\"manufacturer\": \"{$item->get("manufacturer")}\",\n");
		fwrite($fileM, "\t\t\t\"price\": \"{$item->get("price")}\",\n");
		fwrite($fileM, "\t\t\t\"dateEntered\": \"{$item->get("dateEntered")}\",\n");
		fwrite($fileM, "\t\t\t\"description\": \"{$item->get("description")}\",\n");
		fwrite($fileM, "\t\t\t\"createdBy\": \"{$item->get("createdBy")}\",\n");
		if($item->get("retiredStatus") == 0){
			fwrite($fileM, "\t\t\t\"retiredStatus\": \"no\",\n");
		}else{
			fwrite($fileM, "\t\t\t\"retiredStatus\": \"yes\",\n");
		}
		fwrite($fileM, "\t\t\t\"type\": \"{$item->get("type")}\",\n");
		fwrite($fileM, "\t\t\t\"serialNum\": \"{$item->get("serialNum")}\",\n");
		fwrite($fileM, "\t\t\t\"currentUser\": \"{$item->get("currentUser")}\",\n");
		if($item->get("computer") == NULL){
			fwrite($fileM, "\t\t\t\"computerName\": \"-\",\n");
			fwrite($fileM, "\t\t\t\"operatingSys\": \"-\"\n");
		}else{
			fwrite($fileM, "\t\t\t\"computerName\": \"{$item->get("computer")->get("computerName")}\",\n");
			fwrite($fileM, "\t\t\t\"operatingSys\": \"{$item->get("computer")->get("operatingSys")}\"\n");
		}
		if($i == $result)
			fwrite($fileM, "\t\t}\n");
		else
			fwrite($fileM, "\t\t},\n");
	}
	fwrite($fileM, "\t]\n}");
	fclose($fileM);
}
?>