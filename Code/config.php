<?php
require_once("Control/queryFunctions.php");
require_once("Control/class.asset.php");
include "resources/BarcodeQR.php";

$dbh = new PDO("mysql:host=localhost;dbname=petrzilk_AMS", 'petrzilk_AMS', 'jellyfish');
?>
