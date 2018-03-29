$(function(){
	// - - - Submit the form through AJAX - - -
	// Attach a click event to the button
	$(".submit-button").click(function(event){
		event.preventDefault(); // Prevent the form from submitting once the button is clicked (as is the default behaviour)
		$("#form-container") // Select the #form-container element for where the returned data loaded through ajax will be inserted
			.load("process.php",	// load this file through AJAX
				$('#form-container').serialize()	// (Send along the form data)
		);
	});

});