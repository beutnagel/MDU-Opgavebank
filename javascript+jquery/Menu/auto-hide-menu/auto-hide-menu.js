
function autoHideMenu(options) {

	// The html element containing the menu
	this.menuContainer = "#mainMenu";

	// The distance from the top that sould trigger the menu to be hidden
	this.triggerDistance = 350;

	// overwrite default values if options are set
	if(options) {
		for (var key in options) {
			console.log("Overwriting default option: " + key + " = " + options[key]);
		  this[key] = options[key];
		}
	}

	// get the menu from the DOM
	this.menu = document.querySelector(this.menuContainer);

	// add eventlistener to listen to the scroll event
	window.onscroll = function () {
		// If current position is further than this.triggerDistance hide the menu
		if (document.body.scrollTop > this.triggerDistance || document.documentElement.scrollTop > this.triggerDistance) {
	    	console.log("Hide the menu");
	    	this.menu.classList.add("hidden");
		} else {
			// show the menu again by removing the "hidden" class
			console.log("show it");
	    	this.menu.classList.remove("hidden");

		}
	}
}