function Mastermind(options) {
	console.log("Created a Mastermind Object");

	// default values
	this.level = "normal";
	this.container = ".game";
	this.colorSelector;
	this.colors = [
		"f44336",
		"9C27B0",
		"3F51B5",
		"2196F3",
		"009688",
		"8BC34A",
		"FFEB3B",
		"FF9800",
	];
	this.maxRounds = 10;
	this.currentRound = 1;
	this.numberOfFields = 4;
	this.guessList = [];
	this.goal = [];

	// overwrite default values if options are set
	if(options) {
		for (var key in options) {
		  //* console.log(key, options[key]);
		  this[key] = options[key];
		}
	}
	console.log(this);

	this.start = function () {
		console.log("Start the game");
		this.initiate();
	}

	this.initiate = function () {
		console.log("initiate the game");
	    var self = this; // we need this to refer back to this object here

	  // - - - Build the first row - - -
	    this.buildRow();


	  // - - - Setup random goal list of colors - - -
	  	let goal = this.colors.slice(); // using slice() to copy values instead of copy by reference

	  	// Randomize colors (https://stackoverflow.com/a/12646864/1620719)
		for (let i = goal.length - 1; i > 0; i--) {
		    let j = Math.floor(Math.random() * (i + 1));
		    [goal[i], goal[j]] = [goal[j], goal[i]];
		}
		// limit the goal array in size to match number of fields
		this.goal = goal.slice(0, this.numberOfFields);
		 console.log(this.goal);




	}; // end initiate



	this.buildRow = function () {
		console.log("Building new row");
		var self = this;

		let row = document.createElement("div");
		let newRow = document.querySelector(this.container).insertBefore(row, document.querySelector(this.container).firstChild);
		newRow.classList.add("row","active");

		let structure = "";
		for (var i = 1; i <= this.numberOfFields; i++) {
			structure += '<div class="place'+i+' field">';
			structure += new ColorSelector(this.colors).container;
			structure += '</div>';
		}
		structure += '<button class="answer">&rarr;</button>';
		newRow.innerHTML = structure;




	  // Set up event handlers for field click on active row
		elements = document.querySelectorAll(".row.active .field");
		for (var field of elements) {
		  //* console.log(field);
		  field.addEventListener("click",function (e) {

		  	//	Get the field clicked on
		  		let field = e.target.parentNode.parentNode;
		  		//* console.log(field);
		  		
		  	// 	Get color clicked on
		  		let color = e.target.getAttribute("data-value");
		  		//* console.log(color);

		  	// Call the handler for color clicks	
		  	self.handleColorClick(field, color); // notice we can't use 'this' here, since this now refers to the item
		  })
		} // end for

	  // Set up event handlers for submit buttons
	  element = document.querySelector(".row.active .answer");
	  element.addEventListener("click",function () {
	  	console.log("click on submit answer");
	  	self.checkResult();
/*	  	let result = (self.guessList.toString() === self.goal.toString());
	  	console.log(result);*/
	  });
	};

	this.checkResult = function () {
		var roundResult = {
			"color": 0,
			"colorAndPosition": 0,
		};
		console.log(this.guessList.toString());
		console.log(this.goal.toString());
		let result = (this.guessList.toString() === this.goal.toString());
	  	console.log(result);
	  	if (result) {
	  		this.win();
	  	} else {
	  		this.currentRound++;
	  		
	  		// end game if out of rounds
	  		if(this.currentRound > this.maxRounds) {
	  			this.loose();
	  		}
	  		

	  		// new round
	  		

	  		// calculate correct answers
	  		 
	  		for (var i = 0; i < this.guessList.length; i++) {
	  			if(this.goal.includes(this.guessList[i])) {
	  				if(this.guessList[i] === this.goal[i]) {
	  					roundResult.colorAndPosition++;
	  					console.log("1 color matches position");
	  				} else {
	  					roundResult.color++;
	  					console.log("1 color correct, but position is wrong");
	  				}
	  			}
	  			
	  		}
	  		console.log(roundResult);
	  		var resultElm = document.createElement("p");
	  		resultElm.innerHTML = roundResult.color + ' color<br>'+roundResult.colorAndPosition+' color AND position';
	  		document.querySelector(".row.active").append(resultElm);

	  		//document.querySelector(".result")

	  		// clone row node, since it will remove all event listeners
	  		var old_element = document.querySelector(".row.active");
			var new_element = old_element.cloneNode(true);
				// remove the .answer button element
				new_element.removeChild(new_element.querySelector(".answer"));
			old_element.parentNode.replaceChild(new_element, old_element);
	  		

	  		document.querySelector(".row.active").classList.remove("active"); 



	  		this.buildRow();
	  	}
	};


	this.handleColorClick = function(field, color) {
		console.log("handle click for field");
		field.style.backgroundColor = "#"+color;

		// add color to guess list. Take the array index from class name, e.g. place4 => 3
		let placement = field.classList[0].replace("place","")-1;
		//* console.log(placement);
		this.guessList[placement] = color;
		//* console.log(this.guessList);
	};

	this.win = function () {
		document.querySelector(this.container).innerHTML = "Yeah! You won!";
	}

	this.loose = function () {
		document.querySelector(this.container).innerHTML = "Oh no! You lost!";
	}







	return this;




} // end Mastermind
















// - - - 

function ColorSelector(colors) {
	this.container = '<div class="colorSelector">';
		for (var i = 0; i < colors.length; i++) {
			let color = colors[i]
			//* console.log(color);
			this.container += '<div class="colorSelector__color" style="background-color: #'+color+';" data-value="'+color+'"></div>';
		}
	this.container += '</div>';


	console.log("colorselector object created");
	//* console.log(this.colorSelector);
	return this.container;
}


