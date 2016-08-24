$(function(){

	var busMaxCapacity = $("#busMaxCapacity").val();
	var numberOfPeopleGettingOn = $("#numberOfPeopleGettingOn").val();
	var numberOfPeopleGettingOff = $("#numberOfPeopleGettingOff").val();

	$("#busForm").on("submit", function(event){
		$.ajax({
		  type: "POST",
		  url: "handleForm.php",
		  data: {busMaxCapacity, numberOfPeopleGettingOn, numberOfPeopleGettingOff},
		})
		.done(function(response){
			
			$("#freeSeats").html(response.freeSeats);
			$("#takenSeats").html(response.takenSeats); 
			$("#comment").html(response.comment);
			console.log(busMaxCapacity);
			} 
		)
		event.preventDefault();
	});

})