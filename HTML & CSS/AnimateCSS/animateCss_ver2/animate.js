// Document ready function
// Is called when the document is done loading and the DOM is ready.
$(function() {
    console.log( "Document is ready" );
    // Call the initiate function
    initiate();
});


// - - - Function definitions - - - 

// INITIATE()
// This function adds a click event handler to the button element
function initiate() {
	console.log("initiate() blev kaldt");

	// Get the button element
	var $click_btn = $("#action");

	// Add a click event listener to the button element
	$click_btn.click(function() {
		console.log("Der blev klikket på #action knappen");
		
		// When clicked, call the animate function
		animate();
	});
}


// ANIMATE()
// This function toggles the animate.css class name
// on the #box element
function animate() {
	console.log("Animate blev kaldt");

	// Get the #box element
	var $box = $("#box");

	// Toggle the class
	$box.toggleClass("animated wobble");
}


