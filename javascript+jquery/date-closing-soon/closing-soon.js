
// The model DOM element
var modal = document.querySelector('.modal');
var overlay = document.querySelector('.overlay');

/* Event listener for the overlay */
overlay.addEventListener('click', function(event) {
	console.log('clicked');
	if(event.target !== overlay) {
		console.log('... on modal');
	} else {
		console.log('... on the overlay');
		overlay.classList.add('overlay--hidden');
	}
});