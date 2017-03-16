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

function getLast10($dbh){
	$array = array();
	$getLast10 = "SELECT * FROM items ORDER BY dateEntered DESC LIMIT 10";
	$stmt = $dbh->prepare($getLast10);
	$stmt->execute();
	$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($items as $item){
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

function getSingleObject($aID ,$dbh){
	$result = $stmt = "SELECT * FROM items WHERE itemID = :itemID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":itemID", $aID);
	    $query->execute();
	    $item = $query->fetch(PDO::FETCH_ASSOC);
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
	   
	    return $asset;
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

function generateJsonForDonut($items){
	$retired = 0;
	$active = 0;
	foreach($items as $item){
		if($item->get("retiredStatus") == 0){
			$active++;
		}else{
			$retired++;
		}
	}
    $display =  "{label: 'Active', value: {$active}},";
    $display .= "{label: 'Retired', value: {$retired}},";
    return (string) $display;
}
function generateJsonForDonut2($items){
	$bookcase = 0;
	$computer = 0;
	$confChair = 0;
	$credenza = 0;
	$desk = 0;
	$deskChair = 0;
	$fileCab2 = 0;
	$fileCab3 = 0;
	$fileCab4 = 0;
	$fileCab5 = 0;
	$lamp = 0;
	$laptop = 0;
	$officeChair = 0;
	$phone = 0;
	$printer = 0;
	$speaker = 0;
	$table = 0;
	$other = 0;
	foreach($items as $item){
		if($item->get("type") == "BookShelves"){
			$bookcase++;
		}else if($item->get("type") == "Computer"){
			$computer++;
		}else if($item->get("type") == "Conference Room Chair"){
			$confChair++;
		}else if($item->get("type") == "Credenza"){
			$credenza++;
		}else if($item->get("type") == "Desk"){
			$desk++;
		}else if($item->get("type") == "Desk Chair"){
			$deskChair++;
		}else if($item->get("type") == "File Cabinet 2 drawer"){
			$fileCab2++;
		}else if($item->get("type") == "File Cabinet 3 drawer"){
			$fileCab3++;
		}else if($item->get("type") == "File Cabinet 4 drawer"){
			$fileCab4++;
		}else if($item->get("type") == "File Cabinet 5 drawer"){
			$fileCab5++;
		}else if($item->get("type") == "Lamp"){
			$lamp++;
		}else if($item->get("type") == "Laptop"){
			$laptop++;
		}else if($item->get("type") == "Office Chair"){
			$officeChair++;
		}else if($item->get("type") == "Phone"){
			$phone++;
		}else if($item->get("type") == "Printer"){
			$printer++;
		}else if($item->get("type") == "Speaker"){
			$speaker++;
		}else if($item->get("type") == "Table"){
			$table++;
		}else if($item->get("type") == "Other"){
			$other++;
		}
	}
    $display =  "{label: 'BookShelves', value: {$bookcase}},";
    $display .= "{label: 'Computer', value: {$computer}},";
    $display .= "{label: 'Conf. Rm Chair', value: {$confChair}},";
    $display .= "{label: 'Credenza', value: {$credenza}},";
    $display .= "{label: 'Desk', value: {$desk}},";
    $display .= "{label: 'Desk Chair', value: {$deskChair}},";
    $display .= "{label: 'File Cab. 2', value: {$fileCab2}},";
    $display .= "{label: 'File Cab. 3', value: {$fileCab3}},";
    $display .= "{label: 'File Cab. 4', value: {$fileCab4}},";
    $display .= "{label: 'File Cab. 5', value: {$fileCab5}},";
    $display .= "{label: 'Lamp', value: {$lamp}},";
    $display .= "{label: 'Laptop', value: {$laptop}},";
    $display .= "{label: 'Office Chair', value: {$officeChair}},";
    $display .= "{label: 'Phone', value: {$phone}},";
    $display .= "{label: 'Printer', value: {$printer}},";
    $display .= "{label: 'Speaker', value: {$speaker}},";
    $display .= "{label: 'Table', value: {$table}},";
    $display .= "{label: 'Other', value: {$other}},";

    return (string) $display;
}

function getAccounts($dbh){
	$selectAccounts = "SELECT username FROM users";
	$stmt = $dbh->prepare($selectAccounts);
	$stmt->execute();
	$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo "<option></option>";
	foreach($items as $item){
		echo "<option value='{$item['username']}'>{$item['username']}</option>";
	}
}

?>