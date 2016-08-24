<?php 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$peopleOnBus = 0;
	$peopleGettingOff = $_POST['numberOfPeopleGettingOff']; //0
	$peopleGettingOn = $_POST['numberOfPeopleGettingOn']; //15
=======
=======
>>>>>>> origin/master
=======
>>>>>>> origin/master


	$peopleOnBus = 0;
	$peopleGettingOff = $_POST['numberOfPeopleGettingOff'];
	$peopleGettingOn = $_POST['numberOfPeopleGettingOn'];
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> origin/master
=======
>>>>>>> origin/master

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> origin/master
=======
>>>>>>> origin/master
=======
>>>>>>> origin/master
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

	$query = "UPDATE bus SET currentLoad = $totalAmountOfPeople";


?>