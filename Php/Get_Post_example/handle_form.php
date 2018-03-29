<!DOCTYPE html>
<html>
<head>
	<title>Processing the form data</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Processing the form data</h1>
	
	<?php
	sleep(3);
		if(empty($_POST)) {
			?>
			<h2>The GET method was used</h2>
			<p><?php echo $_GET['name'];?> skrev <?php echo $_GET['message'];?></p>
			</p>
			<?php
		} else {
			?>
			<h2>The POST method was used</h2>
			<p>The message was: <?php echo $_POST['message'];?></p>
			<?php
		}

	?>


	<h3>The $_GET contains the following:</h3>
	<?php var_dump($_GET);?>
	<h3>The $_POST contains the following:</h3>
	<?php var_dump($_POST);?>
</body>
</html>
