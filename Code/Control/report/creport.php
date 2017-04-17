<?php
$bindArray = array();
$bindArrayConstrants = array();
if(isset($_POST['type'])){
	$sqlBuilderType = "(";
	$counter = 0;
	$max = count($_POST['type']);
	foreach( $_POST['type'] as $v ) {
	    $sqlBuilderType .= "type = :{$v}";
	    $counter++;
	    array_push($bindArray, ":{$v}");
	    array_push($bindArrayConstrants, "{$v}");
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
	    $sqlBuilderEntered .= "type = :{$v}";
	    $counter++;
	    array_push($bindArray, ":{$v}");
	    array_push($bindArrayConstrants, "{$v}");
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
	    $sqlBuilderLoc .= "location = :{$v}";
	    $counter++;
	    array_push($bindArray, ":{$v}");
	    array_push($bindArrayConstrants, "{$v}");
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
	    $sqlBuilderCurrUser .= "currentUser = :{$v}";
	    $counter++;
	    array_push($bindArray, ":{$v}");
	    array_push($bindArrayConstrants, "{$v}");
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
	    $sqlBuilderMan .= "manufacturer = :{$v}";
	    $counter++;
	    array_push($bindArray, ":{$v}");
	    array_push($bindArrayConstrants, "{$v}");
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
    array_push($bindArray, ":retired");
	array_push($bindArrayConstrants, "{$_POST['retiredStatus']}");
}else{
	$sqlBuilderRetired = "1 = 1";
}
if(isset($_POST['priceLow'])){
	$sqlBuilderPriceLow = "price <= :priceLow";
	array_push($bindArray, ":priceLow");
	array_push($bindArrayConstrants, "{$_POST['priceLow']}");
}else{
	$sqlBuilderPriceLow = "1 = 1";
}

if(isset($_POST['priceHigh'])){
	$sqlBuilderPriceHigh = "price >= :priceHigh";
    array_push($bindArray, ":priceHigh");
	array_push($bindArrayConstrants, "{$_POST['priceHigh']}");
}else{
	$sqlBuilderPriceHigh = "1 = 1";
}

if(isset($_POST['dateFirst'])){
	$sqlBuilderDateFirst = "dateEntered <= :dateFirst";
    array_push($bindArray, ":dateFirst");
	array_push($bindArrayConstrants, "{$_POST['dateFirst']}");
}else{
	$sqlBuilderDateFirst = "1 = 1";
}

if(isset($_POST['dateSecond'])){
	$sqlBuilderDateSecond = "dateEntered <= :dateSecond";
    array_push($bindArray, ":dateSecond");
	array_push($bindArrayConstrants, "{$_POST['dateSecond']}");
}else{
	$sqlBuilderDateSecond = "1 = 1";
}

if($_POST['warrentyStatus'] != ""){
	$date = new DateTime($_POST['dateFirst']);
	$dateFirst = date_format($date, 'Y-m-d');
	if($_POST['warrentyStatus'] == 1){
		$sqlBuilderWarrStatus = "warrantyExp >= :warDateFirst";
	    array_push($bindArray, ":warDateFirst");
		array_push($bindArrayConstrants, "{$dateFirst}");
	}else{
		$sqlBuilderWarrStatus = "warrantyExp <= :warDateSecond";
	    array_push($bindArray, ":warDateSecond");
		array_push($bindArrayConstrants, "{$dateFirst}");
	}
}else{
	$sqlBuilderWarrStatus = "1 = 1";
}

$stmtString = $sqlBuilderType . " AND " . $sqlBuilderLoc . " AND " . $sqlBuilderMan . " AND " . $sqlBuilderEntered . " AND " . $sqlBuilderRetired . " AND " . $sqlBuilderWarrStatus . " AND " . $sqlBuilderCurrUser . " AND " . $sqlBuilderPriceHigh . " AND " . $sqlBuilderPriceLow . " AND " . $sqlBuilderDateFirst . " AND " . $sqlBuilderDateSecond;
echo $stmtString;
?>