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


	<!-- 
		Holder for the message that appears
	-->



	<!-- 
		Load the awesomplete javascript file
	-->
	<script src="js/awesomplete.min.js"></script>




</body>
</html>
<!-- Source: http://leaverou.github.io/awesomplete/ -->