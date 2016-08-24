$(function(){

	//var numberOfPeopleGettingOn = $("#numberOfPeopleGettingOn").val();
	//var numberOfPeopleGettingOff = $("#numberOfPeopleGettingOff").val();

	$("#setBusCapacity").on('click', function(){
		var busMaxCapacity = $("#busMaxCapacity").val();
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "script.php",
			data: {busMaxCapacity}
		})
		.done(function(response){
			$("#newCapacity").html(response);
			$("#freeSeats").html(busMaxCapacity);
			console.log(busMaxCapacity);
		})
	})

	$("updateLoad").on('click', function(){

		var peopleGettingOff = $("#numberOfPeopleGettingOff").val();
		var peopleGettingOn = $("#numberOfPeopleGettingOn").val();
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "script.php",
			data: {peopleGettingOn,peopleGettingOff}
		})
		.done(function(response){
			$("#newAmount").html(response);
			console.log(peopleGettingOff,peopleGettingOn);

	}


	// $("#busForm").on("submit", function(event){
	// 	$.ajax({
	// 	  type: "POST",
	// 	  url: "handleForm.php",
	// 	  data: {busMaxCapacity, numberOfPeopleGettingOn, numberOfPeopleGettingOff},
	// 	})
	// 	.done(function(response){
			
	// 		$("#freeSeats").html(response.freeSeats);
	// 		$("#takenSeats").html(response.takenSeats); 
	// 		$("#comment").html(response.comment);
	// 		console.log(busMaxCapacity);
	// 		} 
	// 	)
	// 	event.preventDefault();
	// });

})