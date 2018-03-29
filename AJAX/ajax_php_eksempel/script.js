// Shorthand for $( document ).ready()
$(function() {
    console.log("ready!");
    // Handle when the form submit button is pressed
	$('.pure-form').submit(function(event) {
		console.log("Handler for .submit() called.");
		
		// Stop form from sending through 
		// traditional means when clicking button 
		event.preventDefault();

		// get the data that was inputted in the form
		email = $('#email').val();
		password = $('#password').val();
		remember = $('#remember').prop('checked');
		console.log(email);
		console.log(password);
		console.log(remember);
		hideLoginForm();
		toggleLoading();
		$('main').load("process.php",{email: $('#email').val()},function(){
    		/* Stuff to do after the page is loaded */
    		console.log("Loaded AJAX");
    		toggleLoading();

    	});

	});
/*	$('#login').click(function(event) {
		console.log("Clicked the button");
		$('main').load("process.php",{email: $('#email').val()},function(){
    		console.log("Loaded AJAX");
    		toggleLoading();

    	});
	});
*/});

function toggleLoading() {
	$("#loading").toggleClass('on');;
}

function hideLoginForm() {
	$(".pure-form").hide();
}