<?php 
require_once("config.php");
require_once("Bcrypt.php");
$insert = "INSERT INTO users (username, email, password, accountLevel) VALUES (:username, :email, :password, :accountLevel)";
$stmt = $dbh->prepare($insert);
$hash = Bcrypt::hashPassword("password123");
$stmt->bindValue(":username", "Andy");
$stmt->bindValue(":email", "andypetrzilka@gmail.com");
$stmt->bindvalue(":password", $hash);
$stmt->bindValue(":accountLevel", 2);
$stmt->execute();

echo "Done";





?>