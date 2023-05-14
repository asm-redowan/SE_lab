<?php
// Connect to the database
include('dbconn.php');
include('session.php');

// Prepare the SQL statement
$sql = "SELECT * FROM wanted where status = 'aprove' and police_id ='$user_id'";

// Execute the SQL statement
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
	// Create an empty array to hold the data
	$data = array();

	// Loop through each row and add it to the data array
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}

	// Return the data as a JSON string
	echo json_encode($data);
} else {
	echo "error";
}

// Close the database connection
$conn->close();
?>
