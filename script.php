<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
require('requires/db.php');

// Take the value
$peopleOnBus = 0;
$newCapacity = $_POST['busMaxCapacity'];
$peopleGettingOff = $_POST['numberOfPeopleGettingOff'];
$peopleGettingOn = $_POST['numberOfPeopleGettingOn'];

//Process
    
    $totalAmountOfPeople = $peopleOnBus + $peopleGettingOn - $peopleGettingOff;
   
    if($peopleGettingOff > $newCapacity)
    {
        $errors['invalid'] = 'The values inserted are not valid. Go back to the previous page!';   
    }
 
    else if ($peopleGettingOff > $peopleOnBus)
    {
        $errors['invalid'] = "The values inserted are not valid. Go back to the previous page!";
    }
 
    else
    {
        // Question 1: Capacity is less than total people
        if ($totalAmountOfPeople > $newCapacity)
        {
            $difference = $totalAmountOfPeople - $newCapacity;
            $gotOn = $peopleGettingOn - $difference;


            $result['comment'] = "$gotOn got on the bus, but $difference could not get on";
            $result['freeSeats'] = $newCapacity - $totalAmountOfPeople;
            $result['takenSeat'] = $totalAmountOfPeople;
        }
 
        //Question 2: Spare seats
        else if ($totalAmountOfPeople < $newCapacity)
        {
            $spareSeats = $newCapacity - $totalAmountOfPeople;
            //echo "$totalAmountOfPeople people got on the bus, and there were $spareSeats spare seats";
        }
 
        // Question 3: Total capacity = total people
        else
        {
            //echo "$numberOfPeopleGettingOn people tried to get on the bus";
            //echo "<br>";
            //echo "Everyone could get on the bus yay";
        }
 
    }



// Connect to DB
$connection = mysqli_connect($host, $username, $password, $database);

	if (!$connection)
	{
    die("Connection failed: " . mysqli_connect_error());
	}

// Start the query
	$query = "UPDATE bus SET capacity = $newCapacity"; // UPDATE
	$query = "UPDATE bus SET currentLoad = $totalAmountOfPeople";
// Run the query
	mysqli_query($connection, $query);
	
?>