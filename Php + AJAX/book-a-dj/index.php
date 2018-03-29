<!DOCTYPE html>
<html>
<head>
	<title>Get php form response through Ajax</title>
	<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script|Josefin+Sans:100,100italic,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
	<h1>Book a DJ</h1>
	<p class="lead">Get your party started with your own <strong>Kick-Ass Dj!</strong></p>
	<p>Kickassdjs.com offers you a once in a lifetime opportunity for hiring one of your kick-ass dj's for your very own part.</p>
	<p>Fill out this form to place a request for a DJ and we will contact you to arrange the details.</p>
	<form id="form-container" action="process.php" class="white-pink">
		<label for="name">Full Name: </label>
		<input type="text" name="name" id="name" placeholder="Your full name">
		
		<label for="phone">Phone: </label>
		<input type="tel" name="telephone" id="telephone" placeholder="We will contact you through this number">
		
		<label for="email">Email: </label>
		<input type="email" name="email" id="email" placeholder="e.g. bob@bob.com">
		
		<label for="date">Date: </label>
		<input type="date" name="date" id="date">
		
		<textarea name="message" id="message" cols="30" rows="10"></textarea>
		
		<button type="submit" class="submit-button">Send</button>
	</form>
</main>
<script src="jquery-2.1.4.min.js"></script>
<script src="script.js"></script>
</body>
</html>