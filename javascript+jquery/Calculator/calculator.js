// Inspired by https://zellwk.com/blog/calculator-part-1/
console.log("Calculator is loaded and ready");

// ASSIGNMENT: make sure you can only add one decimal
// Hint: use the hasDecimal variable as a boolean
// 
// ASSIGNMENT: limit the amount of numbers displayed
// Hint: also make sure the calculated returns are caped at the max
// 


const calculator = document.querySelector('.calculator');
const keys = calculator.querySelector('.calculator__keys');
const display = document.querySelector('.calculator__display');
let   hasDecimal = false;

// listen for click events on <button>
keys.addEventListener('click', e => {
  //* console.log("Something got clicked on");
  if (e.target.matches('button')) {
    //  Get info about the button clicked
    const key = e.target; // the actual element clicked on
	const action = key.dataset.action; // any data-action attribute it might have
 	const keyContent = key.textContent // the text value of the button, e.g. "6"
    const displayedNum = display.textContent // the current value of the display, e.g. "42"
	const previousKeyType = calculator.dataset.previousKeyType; // 

	// If no data-action attribute it must be a number key
	if (!action) {
	  console.log('number key!');

	  // If display shows 0, replace the display with the number clicked on
	  // OR if the previous click was on an operator button
	  if (displayedNum === '0' || previousKeyType === 'operator') {
	    display.textContent = keyContent;
	  } else { 
	  // else appended the number to the display
	    display.textContent = displayedNum + keyContent;
	  }
		// Remove .is-depressed class from all keys
		Array.from(key.parentNode.children)
		  .forEach(k => k.classList.remove('is-depressed'));
  	} else {
		if (
		  action === 'add' ||
		  action === 'subtract' ||
		  action === 'multiply' ||
		  action === 'divide'
		) {
		  	console.log('operator key!');
			// Add class to show depressed state of button
			key.classList.add('is-depressed');
			
			// Add custom attribute to indicate that this was an operator action
			calculator.dataset.previousKeyType = 'operator';

			// save the previous number entered
			calculator.dataset.firstValue = displayedNum;
			// save the operator type
  			calculator.dataset.operator = action;

		} else {
			// Remove .is-depressed class from all keys
			Array.from(key.parentNode.children)
			  .forEach(k => k.classList.remove('is-depressed'));
		}

		if (action === 'decimal') {
			console.log('decimal key!')
			// check if decimal is alreadyed used
				
			// ASSIGNMENT: make sure you can only add one decimal
			// Hint: use the hasDecimal variable as a boolean
			// add a decimal to the display value
			display.textContent = displayedNum + '.';
		}

		if (action === 'clear') {
		  console.log('clear key!')
		  // reset the display
		  display.textContent = "0";
		  
		  // remove the stored data from previous actions
		  calculator.dataset.firstValue = "";
		  calculator.dataset.operator = "";
		  calculator.dataset.previousKeyType = "";
		}

		if (action === 'calculate') {
		  console.log('equal key!');
			const firstValue = calculator.dataset.firstValue;
			const operator = calculator.dataset.operator;
			const secondValue = displayedNum;

			display.textContent = calculate(firstValue, operator, secondValue);
		}

	}

  }
});

// calculate function
const calculate = (n1, operator, n2) => {
  let result = '';

  // We want to make sure these are numbers so we can calculate with them
  n1 = parseFloat(n1);
  n2 = parseFloat(n2);

  if (operator === 'add') {
    result = n1 + n2;
  } else if (operator === 'subtract') {
    result = n1 - n2;
  } else if (operator === 'multiply') {
    result = n1 * n2;
  } else if (operator === 'divide') {
    result = n1 / n2;
  }

  return result;
}
