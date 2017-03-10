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


?>