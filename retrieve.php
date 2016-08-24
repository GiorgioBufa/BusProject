<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
require('requires/db.php');

// Connect to DB
$connection = mysqli_connect($host, $username, $password, $database);

	if (!$connection)
	{
    die("Connection failed: " . mysqli_connect_error());
	}

// Start the query
	$query = "SELECT takenSeats, freeSeats FROM bus"; // UPDATE

// Run the query
	$result = mysqli_query($connection, $query);

	$response = [];

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$response['takenSeats'] = $row['takenSeats'];
			$response['freeSeats'] = $row['freeSeats'];
		}
	}
	else {
		$response = "0 Results";
	}

	header("content-type:application/json");
	echo json_encode($response);
?>

