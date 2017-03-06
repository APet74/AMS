<?php
session_start();
require_once("../../config.php");
$query = "SELECT * FROM users WHERE lower(email) = :email OR lower(username) = :username";
$stmt = $dbh->prepare($query);
$stmt->bindValue(":email", strtolower($_POST['username']));
$stmt->bindValue(":email", strtolower(($_POST['username'])))
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (isset($row['email']) || isset($row['username'])) {

    require('Bcrypt.php');
    if (Bcrypt::checkPassword($_POST['password'], $row['password'])){
    session_regenerate_id();
	$_SESSION['sess_user_id'] = $row['id'];
	$_SESSION['sess_email'] = $row['email'];
    $_SESSION['sess_username'] = $row['username'];
    $_SESSION['status'] = $row['accountLevel'];
	session_write_close();
        
        header("Location: index.php");
    } else {
        header("Location: login.php?wrong=Incorrect Password");
    }
} else {
    header("Location: login.php?wrong=Email Not Found");
}
?>