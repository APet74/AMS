<?php
require_once("../../config.php");
require_once("../../resources/userAdmin.php");

$bindArray = array();
$bindArrayConstrants = array();
if(isset($_POST['type'])){
	$sqlBuilderType = "(";
	$counter = 0;
	$max = count($_POST['type']);
	foreach( $_POST['type'] as $v ) {
		$vB = preg_replace('/[^\w]+/', '_', $v);
	    $sqlBuilderType .= "type = :{$vB}";
	    $counter++;
	    $bindArray[':' . $vB] = $v;
		if($max != 1 && $counter != $max){
			$sqlBuilderType .= " OR ";
		}
	
	}
	$sqlBuilderType .= ")";
}else{
	$sqlBuilderType = "1 = 1";
}

if(isset($_POST['enteredBy'])){
	$sqlBuilderEntered = "(";
	$counter = 0;
	$max = count($_POST['enteredBy']);
	foreach( $_POST['enteredBy'] as $v ) {
		$vB = preg_replace('/[^\w]+/', '_', $v);
	    $sqlBuilderEntered .= "createdBy = :{$vB}";
	    $counter++;
	    $bindArray[':' . $vB] = $v;
		if($max != 1 && $counter != $max){
			$sqlBuilderEntered .= " OR ";
		}
	
	}
	$sqlBuilderEntered .= ")";
} else {
	$sqlBuilderEntered = "1 = 1";
}


if(isset($_POST['location'])){
	$sqlBuilderLoc = "(";
	$counter = 0;
	$max = count($_POST['location']);
	foreach( $_POST['location'] as $v ) {
		$vB = preg_replace('/[^\w]+/', '_', $v);
	    $sqlBuilderLoc .= "location = :{$vB}";
	    $counter++;
	    $bindArray[':' . $vB] = $v;
		if($max != 1 && $counter != $max){
			$sqlBuilderLoc .= " OR ";
		}
	
	}
	$sqlBuilderLoc .= ")";
} else {
	$sqlBuilderLoc = "1 = 1";
}


if(isset($_POST['currentUser'])){
	$sqlBuilderCurrUser = "(";
	$counter = 0;
	$max = count($_POST['currentUser']);
	foreach( $_POST['currentUser'] as $v ) {
		$vB = preg_replace('/[^\w]+/', '_', $v);
	    $sqlBuilderCurrUser .= "currentUser = :{$vB}";
	    $counter++;
	    $bindArray[':' . $vB] = $v;
		if($max != 1 && $counter != $max){
			$sqlBuilderCurrUser .= " OR ";
		}
	
	}
	$sqlBuilderCurrUser .= ")";

} else {
	$sqlBuilderCurrUser = "1 = 1";
}

if(isset($_POST['manufacturer'])){
	$sqlBuilderMan = "(";
	$counter = 0;
	$max = count($_POST['manufacturer']);
	foreach( $_POST['manufacturer'] as $v ) {
		$vB = preg_replace('/[^\w]+/', '_', $v);
		if($vB == ""){
			$vB = "notSet";
		}
	    $sqlBuilderMan .= "manufacturer = :{$vB}";
	    $counter++;
	    $bindArray[':' . $vB] = $v;
		if($max != 1 && $counter != $max){
			$sqlBuilderMan .= " OR ";
		}
	
	}
	$sqlBuilderMan .= ")";
} else {
	$sqlBuilderMan = "1 = 1";
}	

if($_POST['retiredStatus'] != ""){
	$sqlBuilderRetired = "retiredStatus = :retired";
	$retired = ":retired";
	$bindArray[$retired] = $_POST['retiredStatus'];
}else{
	$sqlBuilderRetired = "1 = 1";
}
if($_POST['priceLow'] != ""){
	$sqlBuilderPriceLow = "price >= :priceLow";
	$priceLow = ":priceLow";
	$bindArray[$priceLow] = $_POST['priceLow'];
}else{
	$sqlBuilderPriceLow = "1 = 1";
}

if($_POST['priceHigh'] != ""){
	$sqlBuilderPriceHigh = "price <= :priceHigh";
	$priceHigh = ":priceHigh";
	$bindArray[$priceHigh] = $_POST['priceHigh'];
}else{
	$sqlBuilderPriceHigh = "1 = 1";
}

if(isset($_POST['dateFirst'])){
	$sqlBuilderDateFirst = "dateEntered >= :dateFirst";
	$dateFirst = ":dateFirst";
	$bindArray[$dateFirst] = $_POST['dateFirst'];
}else{
	$sqlBuilderDateFirst = "1 = 1";
}

if(isset($_POST['dateSecond'])){
	$sqlBuilderDateSecond = "dateEntered <= :dateSecond";
	$dateSecond = ":dateSecond";
	$bindArray[$dateSecond] = $_POST['dateSecond'];
}else{
	$sqlBuilderDateSecond = "1 = 1";
}

if($_POST['warrentyStatus'] != ""){
	$date = new DateTime($_POST['dateFirst']);
	$dateFirst = date_format($date, 'Y-m-d');
	if($_POST['warrentyStatus'] == 1){
		$sqlBuilderWarrStatus = "warrantyExp >= :warDateFirst";
		$warDateFirst = ":warDateFirst";
		$bindArray[$warDateFirst] = $dateFirst;
	}else{
		$sqlBuilderWarrStatus = "warrantyExp <= :warDateSecond";
		$warDateSecond = ":warDateSecond";
		$bindArray[$warDateSecond] = $dateFirst;
	}
}else{
	$sqlBuilderWarrStatus = "1 = 1";
}

$stmtString = $sqlBuilderType . " AND " . $sqlBuilderEntered . " AND " . $sqlBuilderLoc . " AND " . $sqlBuilderCurrUser . " AND " . $sqlBuilderMan . " AND " . $sqlBuilderRetired . " AND " . $sqlBuilderPriceLow . " AND " . $sqlBuilderPriceHigh. " AND " . $sqlBuilderDateFirst . " AND " . $sqlBuilderDateSecond . " AND " . $sqlBuilderWarrStatus;

$fullSQL = "SELECT itemID FROM items WHERE " . $stmtString;


$stmt = $dbh->prepare($fullSQL);
$stmt->execute($bindArray);
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

$arrayOfObjs = getArrayOfObjectsByID($items, $dbh);
$data = generateAjax($arrayOfObjs, "../../txt/ajaxReport.txt");
header("location:../../reportCustom.php");

?>