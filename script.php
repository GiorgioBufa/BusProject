<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
require('requires/db.php');

// Take the value
$newCapacity = $_POST['busMaxCapacity'];

// Connect to DB
$connection = mysqli_connect($host, $username, $password, $database);

	if (!$connection)
	{
    die("Connection failed: " . mysqli_connect_error());
	}

// Start the query
	$query = "UPDATE bus SET capacity = $newCapacity"; // UPDATE

// Run the query
	mysqli_query($connection, $query);
	
?>