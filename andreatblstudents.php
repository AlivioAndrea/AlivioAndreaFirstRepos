<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "andreadb";

$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die ("Connection Filed: " . $conn->connect_error);
}	
	
$sql = "create table Students(
			StudentNumber varchar(50) primary key,
			LastName varchar(50) not null,
			FirstName varchar(50) not null,
			MiddleName varchar(50) not null,
			Course varchar(100) not null,
			YearLevel int(1) not null,
			EmailAddress varchar(50) not null,
			ContactNumber int(11) not null)";
			
	
			
if ($conn->query($sql) === true) {
		echo "Table created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
?>