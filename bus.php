<!DOCTYPE html>
<html>
<head>
	<title>Bus Exercise</title>
	<style type="text/css">
		.container {
			width: 100%;
			margin: auto;
		}

		.row {
			width: 50%;
			margin: auto;
		}

		form input {
			padding: 5px;
			width: 100%;
			margin: 20px auto;
		}

		form input[type='submit'], form input[type='reset'] {
			width: 50px;
			margin: auto;
		}
	</style>
</head>
<body>

	<div class="container">

		<div class="row">
			<h2>BusCheck</h2>
			<?php 		
				if($peopleOnBus == 0){
					echo "The bus is empty";
				} 
			?>
			<h4>The tool where you control the universe's variables</h4>

		</div>
	
		<div class="row">
			<form method="POST" action="processForm.php">
				<label for="peopleAtBusStop">How many people are waiting at the bus stop?</label>
				<input type="number" id="peopleAtBusStop" name="peopleAtBusStop" placeholder="No. of people at bus stop" required>
				<label for="busCapacity">How many can the bus hold?</label>
				<input type="number" id="busCapacity" name="busCapacity" placeholder="Capacity of Bus" required>
				<label for="peopleGettingOff">How many people are getting off the bus?</label>
				<input type="number" id="peopleOff" name="peopleOff" placeholder="People getting off" required>

				<input type="submit">
				<input type="reset" name="Clear Form">
			</form>
		</div>

	</div>

</body>
</html>