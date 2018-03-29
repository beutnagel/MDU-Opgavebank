<!DOCTYPE html>
<html>
<head>
	<title>Example of form handling with Php</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Try sending something to the server</h1>
<section id="get-example">
	<h2>Using the <em>get</em> method</h2>
	<form action="process.php" method="get">
		<input type="text" placeholder="write a message here" name="message">
		<button type="submit">Send</button>
	</form>
</section>
<section id="post-example">
	<h2>Using the <em>get</em> method</h2>
	<form action="process.php" method="post">
		<input type="text" placeholder="write a message here" name="message">
		<button type="submit">Send</button>
	</form>
</section>


</body>
</html>