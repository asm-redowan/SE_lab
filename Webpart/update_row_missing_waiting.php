<?php
// This script should update the row in the database
// based on the ID that was passed in via AJAX

// // Check if the ID was provided
// if (isset($_POST['id'])) {
// 	echo $_POST['id'];
// 	exit;
// }

// Connect to the database
include('dbconn.php');
include('session.php');


// Prepare the SQL statement
// 	echo $_POST['id'];
$sql = "UPDATE missing SET status ='aprove', police_id ='$user_id' WHERE id=".$_POST['id'];

// Execute the SQL statement
if ($conn->query($sql) == TRUE) {
	echo "success";
} else {
	echo "error";
}

// Close the database connection
$conn->close();
?>
