<?php 

require('requires/db.php');

$amount = $_POST['numberOfPeopleGettingOff'];

	// Connect to DB
	$connection = mysqli_connect($host, $username, $password, $database);

		if (!$connection)
		{
	    die("Connection failed: " . mysqli_connect_error());
		}

	$query = "UPDATE bus 
	SET takenSeats = takenSeats - $amount, 
		freeSeats = freeSeats + $amount";
	// Run the query
	mysqli_query($connection, $query);

	$response = 'yay, done!';

?>