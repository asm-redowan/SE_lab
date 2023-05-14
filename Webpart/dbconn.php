<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khuj";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
	echo "error";
	exit;
}

?>