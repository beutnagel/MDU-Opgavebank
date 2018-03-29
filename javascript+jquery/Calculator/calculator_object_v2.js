function calculator() {
	// The display element
	const display = document.querySelector('.calculator__display');
	
	// The number currently worked on
	this.workingNumber;

	// Storage for the first number when using operators (since they operate on two numbers)
	this.firstNumber = "";

	// Storage for the action of the operator (i.e. add, substract, multiply, divide)
	this.action = false;

	this.keys = [
		"operator",
		"number",
		"decimal",
		"clear",
		"equal",
	];

	// - - - EVENTLISTENERS - - - 
	
	// add event listeners to all buttons
	Array.from(document.querySelectorAll('.calculator__keys button')).forEach(function(element) {
	  element.addEventListener('click', e => {
	  	
	  	// Get the type of the button (e.g. "operator" or "number")
	  	let type = e.target.classList[0].replace("key--","");

	  	// If there is an action for that button, assign it or use the text content of the button
	  	let value = e.target.dataset.action ? e.target.dataset.action : e.target.textContent;

	  	if(this.keys.indexOf(type)>-1) {
	  		this[type](value);
	  	}
	  });
	});


	// - - - Methods - - -
	// Used by the event handlers
	
	// NUMBER
	this.number = (value) => {
	  	if(display.textContent === "0") {
	  		this.workingNumber = value;
	  	} else if(this.workingNumber.length < 15) { // 15 is the max length of allowed input of number
	  		console.log("current length: "+this.workingNumber.length);
	  		this.workingNumber += value;
	  	}
	  	this.updateDisplay();
	}

	// DECIMAL
	this.decimal = () => {
		if(this.workingNumber.indexOf(".") === -1) { // if no "." are in the workingNumber
			this.workingNumber = this.workingNumber + '.';
		  	this.updateDisplay();
		} 
	}

	// OPERATORS
	this.operator = (action) => {
		//console.log("operator action: "+action);
		this.firstNumber = this.workingNumber;
		this.workingNumber = "";
		this.action = action;
	}

	// CLEAR
	this.clear = () => {
		this.workingNumber = "0";
		this.action = false;
		this.firstNumber = "";
		this.updateDisplay();
	}

	// - - - Helper methods - - - 

	// Update display
	// will update the displayed number with the working number
	this.updateDisplay = () => {
		console.log("update");
		display.textContent = this.workingNumber;
	}

	// Equal
	// will perform the mathematical calculations
	this.equal = () => {

	  if(!this.action) { // if there is no action defined then don't perform any calculations
	  	return;
	  }

	  // We want to make sure these are numbers so we can calculate with them
	  const n1 = parseFloat(this.firstNumber);
	  const n2 = parseFloat(this.workingNumber);
	  const operator = this.action;

	  console.log(`${n1} ${this.action} ${n2}`);
	  
	  if (operator === 'add') {
	    this.workingNumber = n1 + n2;
	  } else if (operator === 'subtract') {
	    this.workingNumber = n1 - n2;
	  } else if (operator === 'multiply') {
	    this.workingNumber = n1 * n2;
	  } else if (operator === 'divide') {
	    this.workingNumber = n1 / n2;
	  }

	  this.action = false;
	  this.updateDisplay();
	}

};
