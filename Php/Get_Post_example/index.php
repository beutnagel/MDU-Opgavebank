<!DOCTYPE html>
<html>
<head>
	<title>GET | POST examples</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<main>
	<form action="handle_form.php" method="get">
		<input type="text" name="name">
		<input type="text" name="message">
		<button type="submit">Submit as GET</button>
	</form>
	<form action="handle_form.php" method="post">
		<input type="text" name="message">
		<button type="submit">Submit as POST</button>
	</form>
</main>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/script.js"></script>
</body>
</html>


