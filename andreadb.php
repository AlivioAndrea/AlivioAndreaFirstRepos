<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli ($servername, $username, $password);
if ($conn->connect_error){
	die ("Connection Filed: " . $conn->connect_error);
}

$sql = "create database andreadb";
if ($conn->query($sql) === true){
	echo "Database created successfully";
} else {
	echo "Eroor creating database: " . $conn->error;
}

$conn->close();
?>