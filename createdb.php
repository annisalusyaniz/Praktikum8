<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";

// Create Connection
$conn = mysqli_connect($servername, $username, $password=""); 

// Check Connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}

// Create Database
$sql = "CREATE DATABASE db_SD";
if (mysqli_query($conn, $sql)) {
	echo "Database Created Successfully"; 
} else {
	echo "Database Creating Failed: ".mysqli_error($conn); 
}

mysqli_close($conn);
?>