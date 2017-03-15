<?php
session_start();
if($_SESSION['status'] != 2 && isset($_SESSION['status'])){
	header("location:authError.php");
}elseif (!isset($_SESSION['status'])) {
	header("location:login.php");
}

?>