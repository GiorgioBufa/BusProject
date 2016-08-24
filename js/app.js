$(function(){
	$.ajax({
		type: "GET",
		url: "retrieve.php"
	})
	.done(function(response){
		console.log(response);

		$("#takenSeats").html(response.takenSeats);
		$("#freeSeats").html(response.freeSeats);
	});

	$("#setBusCapacity").on('click', function(){
		var busMaxCapacity = $("#busMaxCapacity").val();
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "update.php",
			data: {busMaxCapacity}
		})
		.done(function(response){
			$("#newCapacity").html(response);
			$("#freeSeats").html(busMaxCapacity);
			console.log(busMaxCapacity);
		})
	});

<<<<<<< HEAD
	// $("#updateLoad").on('click', function(){
	// 	var peopleGettingOff = $("#numberOfPeopleGettingOff").val();
	// 	var peopleGettingOn = $("#numberOfPeopleGettingOn").val();
	// 	event.preventDefault();
=======
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

<<<<<<< HEAD
>>>>>>> origin/master
=======
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

>>>>>>> origin/master

	// 	$.ajax({
	// 		type: "POST",
	// 		url: "process.php",
	// 		data: {peopleGettingOn, peopleGettingOff}
	// 	})
	// 	.done(function(response){
	// 		$("#newAmount").html(response);
	// 	})
	// });



	$("#getOnBus").on('click', function(){
		event.preventDefault();
		var numberOfPeopleGettingOn = $('#numberOfPeopleGettingOn').val();
		$.ajax({
			type : "POST",
			url : "addpeople.php",
			data : {
				action: 'getOnBus',
				numberOfPeopleGettingOn: numberOfPeopleGettingOn
			}
		})
		.done (function(response){
			console.log('Welldone');
		})
	})

	$("#getOffBus").on('click', function(){
		event.preventDefault();
		var numberOfPeopleGettingOff = $('#numberOfPeopleGettingOff').val();
		$.ajax({
			type : "POST",
			url : "removepeople.php",
			data : {
				action: 'getOffBus',
				numberOfPeopleGettingOff: numberOfPeopleGettingOff
			}
		})
		.done (function(response){
			console.log('Welldone');
		})
	})
})