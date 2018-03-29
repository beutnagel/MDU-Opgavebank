// JavaScript  Slotmachine game
// Erklærer variabler

// spiller begynder 10 point
var point = 10;

// holder styr på pointStatus
var pointStatus = document.getElementById("pointStatus");

// holder styr på reset-knappen
var resetBtn = document.getElementById("rstbtn");

// holder styr på gameStatus
var gameStatus = document.getElementById("gameStatus");

// holder styr på rollDice-knappen
var rollDiceBtn = document.getElementById("btn");

rollDiceBtn.disabled = false;

pointStatus.innerHTML = point;

function rollDice(){
// Holder styr på antal øjne på dice 1/terning 1
var die1 = document.getElementById("die1");
// Generer et tilfældigt tal mellem 1-6
var d1 =  Math.floor(Math.random() * 6) +1;
// Dice 1 sættes til at være ligmed d1(tilfældig tal)
die1.innerHTML = d1;
// sætter css på die1 til at have baggrundsfarve hvid
die1.style.background = "white";

// Holder styr på antal øjne på dice 2/terning 2
var die2 = document.getElementById("die2");
// Generer et tilfældigt tal mellem 1-6
var d2 =  Math.floor(Math.random() * 6) +1;
// Dice 2 sættes til at være ligmed d2(tilfældig tal)
die2.innerHTML = d2;
// sætter css på die2 til at have baggrundsfarve hvid
die2.style.background = "white";

// Holder styr på antal øjne på dice 3/terning 3
var die3 = document.getElementById("die3");
// Generer et tilfældigt tal mellem 1-6
var d3 =  Math.floor(Math.random() * 6) +1;
// Dice 3 sættes til at være ligmed d3(tilfældig tal)
die3.innerHTML = d3;
// sætter css på die3 til at have baggrundsfarve hvid
die3.style.background = "white";


	if(d1 == d2 && d2 == d3)
	{
		gameStatus.innerHTML = "Gevinst *J A C K P O T* - Spytter mange penge ud!";
		point += 20;
		document.getElementById("sound").play();

		die1.style.background = "Goldenrod";

		die2.style.background = "Goldenrod";

		die3.style.background = "Goldenrod";

		pointStatus.innerHTML = point;
	}
	else
	{
		gameStatus.innerHTML = "Du tabte dine penge!";

		point--;

		pointStatus.innerHTML = point;

		if(point < 1) 
		{
			endGame();
		}
	}

	function endGame()
	{
		gameStatus.innerHTML = "Game OVER!";

		rollDiceBtn.disabled = true;
	}

}

function resetDice()
{

	rollDiceBtn.disabled = false;

	point = 10;

	die1.innerHTML = 0;
	
	die2.innerHTML = 0;
	
	die3.innerHTML = 0;

	pointStatus.innerHTML = point;
}














