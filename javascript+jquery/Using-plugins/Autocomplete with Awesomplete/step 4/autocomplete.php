<!DOCTYPE html>
<html>
<head>
	<title>Autocomplete with Awesomplete.js</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/awesomplete.css">
</head>
<body>

	<h1>Which European capital have you been to?</h1>
	<p>Have you been to London, Copenhagen or Paris? (hint: try Paris)</p>
	<!-- 	
		Input field where the user can type something. 
		Identify it with the class="awesomplete" 
		to activate the autocomplete.
	-->
	<input class="awesomplete"
	       data-list="Amsterdam, Berlin, Paris, London, Copenhagen, Oslo, Stockholm, Reykjavik, Warsaw, Sofia, Edinburgh, Cardiff, Lisbon, Madrid, Budapest, Vienna, Luxembourg City, Riga, Helsinki, Prague, Athens, Belgrade, Bern, Bratislava, Brussels, Bucharest, Dublin, Kiev, Ljubljana, Minsk, Monaco, Nicosia, Nuuk, Podgorica, Rome, San Marino, Sarajevo, Skopje, Tallinn, Tirana, Vaduz, Valletta, Vatican City, Vilnius, Zagreb, Moscow, Chisinau, Andorra la Vella, Torshavn">


	<!-- 
		A submit button that triggers our own javascript
	-->
	<button id="submit" onclick="submitCity();">Submit</button>


	<!-- 
		Holder for the message that appears
	-->
	<p id="message"></p>



	<!-- 
		Load the awesomplete javascript file
	-->
	<script src="js/awesomplete.min.js"></script>


	<!-- 
		Our own javascript
	-->
	<script>
		function submitCity() {
			// First get the input element. The [0] means we only pick the first (and only)
			// element from the list of input elements.
			var input = document.getElementsByTagName("input")[0];
			
			// Then get the text value of it (which is the city name)
			var city = input.value;

			// Log it to the console so we can see the result we got
			console.log(city);

			// show a message, by first getting the #message element and then setting 
			// the text node
			document.getElementById("message").innerText = "You have been to "+city+"? Nice!";
			
			// Check if the city selected is "Paris" and change the background color and 
			// image for the body element
			if(city === "Paris") {
				document.body.style.backgroundImage = "url('images/paris.jpg')";
				document.body.style.backgroundColor = "#1F1F1F";
			} 

			// Else set it to the normal defaults


		}
	</script>
</body>
</html>
<!-- Source: http://leaverou.github.io/awesomplete/ -->