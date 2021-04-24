<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "andreadb";


$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die ("Connection Filed: " . $conn->connect_error);
}	 

$sql = "insert into Students(
			StudentNumber,
			LastName,
			FirstName,
			MiddleName,
			Course,
			YearLevel,
			EmailAddress ,
			ContactNumber) values 
			('17-1485',
			'Alivio',
			'Angela',
			'Lllamador',
			'Bachelor of Science in Information Technology',
			2,
			'andrea.llamador.alivio@gmail.com',
			123456789101)"
			;
			
if ($conn->query($sql) === true) {
		echo "Data inserted into table Students successfully";
} else {
	echo "Error inserting data into table: " . $conn->error;
}

$conn->close();
?>