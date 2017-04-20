<?php
require_once("../../config.php");
require_once("../../resources/userAdmin.php");
	$selectQuery = "SELECT * FROM items WHERE computerID <> 0";
	$stmt = $dbh->prepare($selectQuery);
	$stmt->execute();
	$computers = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$objs = getArrayOfObjectsByID($computers, $dbh);
	generateAjax($objs, "../../txt/ajaxCompReport.txt");
header("location:../../reportComp.php");