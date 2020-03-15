<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="hardware";
$a=$_POST["name"];
$b=$_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE table if not exists mydb()";
$sql1 = "SELECT name, password FROM mydb WHERE name='$a' and password='$b'";
if ($conn->query($sql) === TRUE) {
	
	 if ($conn->query($sql1)!=NULL) {
		 
		 header("Location: index.html");

	 }
	 else{
	echo "not valid";
	
	 }
       
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>