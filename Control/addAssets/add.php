<?php 
	require_once("../../config.php");
	$insertQuery = "INSERT INTO items (location, warrantyExp, manufacturer, price, description, createdBy, retiredStatus, type, serialNum, currentUser) SET (:location, :warrantyExp, :manufacturer, :price, :description, :createdBy, :retiredStatus, :type, :serialNum, :currentUser)";
?>