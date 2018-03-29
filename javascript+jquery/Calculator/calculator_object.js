function calculator() {
	// The display element
	const display = document.querySelector('.calculator__display');
	
	// The number currently worked on
	this.workingNumber;

	// Storage for the first number when using operators (since they operate on two numbers)
	this.firstNumber = "";

	// Storage for the action of the operator (i.e. add, substract, multiply, divide)
	this.action = false;

	
	// - - - EVENTLISTENERS - - - 
	
	// for Numbers
	Array.from(document.querySelectorAll('.key--number')).forEach(function(element) {
	  element.addEventListener('click', e => {
	  	console.log("number: " + e.target.textContent);
	  	this.number(e.target.textContent);
	  });
	});

	// for Operators
	Array.from(document.querySelectorAll('.key--operator')).forEach(function(element) {
	  element.addEventListener('click', e => {
	  	console.log("operator: " + e.target.dataset.action);
	  	this.operator(e.target.dataset.action);
	  });
	});

	// for Clear
	document.querySelector('.key--clear').addEventListener('click', e => {
		console.log("clear");
		this.clear();
	});


	// for Equal
	document.querySelector('.key--equal').addEventListener('click', e => {
		console.log("equal");
		this.calculate();
	});

	// for Decimal
	document.querySelector('.key--decimal').addEventListener('click', e => {
		console.log("decimal");
		this.decimal();
	});

	

	// - - - Methods - - -
	// Used by the event handlers
	
	// NUMBER
	this.number = (value) => {
	  	if(display.textContent === "0") {
	  		this.workingNumber = value;
	  	} else {
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

	// Calculate
	// will perform the mathematical calculations
	this.calculate = () => {

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
