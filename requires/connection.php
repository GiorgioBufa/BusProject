<?php 

$connection = mysqli_connect($localhost, $username, $password, $database);

	if (!$connection)
	{
    die("Connection failed: " . mysqli_connect_error());
	}

	$query = ""; // UPDATE
	$result = mysqli_query($connection, $query);
	
	
?>