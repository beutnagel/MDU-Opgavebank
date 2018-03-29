// JavaScript Document
var cWin = 0;
var uWin = 0;
var playNow = function() 
{
	var makeChoice = prompt("Do you choose rock, paper or scissors?");
	var uChoice = makeChoice.toLowerCase();
	var cChoice = Math.random();
	
	if ((0 <= cChoice && cChoice <= 0.3)) 
	{
		cChoice = "rock";
	} 
	
	else if ((0.3 < cChoice && cChoice  <= 0.6)) 
	{
		cChoice = "paper";
	} 
	
	
	else if ((0.6 < cChoice && cChoice  <= 0.9))	
	{
		cChoice = "scissors";
	} 
	
	else if ((0.9 < cChoice && cChoice  <= 1))	
	{
		cChoice = "fire";
	};
	

	
	if(uChoice === "fire")
	{
		document.getElementById('winner').innerHTML=
		
		"<p>You are not allowed to choose fire!</p> <p>Choose something else</p>"
		;
		
		document.getElementById('choiceUser').innerHTML= " ";
		document.getElementById('choiceComputer').innerHTML= " ";
		document.getElementById('versus').innerHTML= " ";
		
		
	}
	
	else if (uChoice != "fire" && uChoice != "rock" && uChoice != "paper" && uChoice != "scissors") {
		document.getElementById('winner').innerHTML= 
		
		"<p>That makes no sense! Follow the rules</p>"
		
		
		document.getElementById('choiceUser').innerHTML= " ";
		document.getElementById('choiceComputer').innerHTML= " ";
		document.getElementById('versus').innerHTML= " ";
	}
	
	else
	{
		document.getElementById('choiceUser').innerHTML=
		
		"<p>Your choice was " + uChoice + "</p>";
		
		
		document.getElementById('choiceComputer').innerHTML=
		
		"<p>The computer chose " + cChoice +"</p>";
		
		document.getElementById('versus').innerHTML= "VS.";
		
		if(uChoice === cChoice) 
			
		{
			document.getElementById('winner').innerHTML = 
			
			"<p>The result is a tie!</p> <p>Make a new choice!</p>";
		}
		
		else if (cChoice === "rock")
			
		{
			if (uChoice === "scissors") 
			{
				cWin++;
				document.getElementById('winner').innerHTML= 
				
				'<p style="color:red;">You lose! </p>'
			}
			
			
			else 
			{
				uWin++;
				document.getElementById('winner').innerHTML= 
				
				"<p>You win!</p>";
			}
		}  
		
		else if(cChoice === "scissors")
			
		{
			if (uChoice === "paper")
			{
				cWin++;
				document.getElementById('winner').innerHTML= 
				
				'<p style="color:red;">You lose! </p>'
			}
			
			else
			{
				uWin++;
				document.getElementById('winner').innerHTML= 
				
				"<p>You win!</p>";
			}
		}
		
		else if(cChoice === "paper")
			
		{
			if (uChoice === "rock")
			{
				cWin++;
				document.getElementById('winner').innerHTML= 
				
				'<p style="color:red;">You lose! </p>';
			}
			
			else
			{
				uWin++;
				document.getElementById('winner').innerHTML= 
				
				"<p>You win!</p>";
			}
		}
		
		else if(cChoice === "fire")
			
		{
			cWin++;
			document.getElementById('winner').innerHTML= 
			'<p style="color:red;"> You lose to the overpowered fire.</p>'
		}
	};
	document.getElementById('cWinCount').innerHTML= "<p>Computer score = " + cWin + "</p>"; 
	document.getElementById('uWinCount').innerHTML= "<p>Your score = " + uWin + "</p>";
};