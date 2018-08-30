<!DOCTYPE html>
<html>
<head>
	<title>Moview - What have you been watching?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Moview - What have you been watching?</h1>
<a href="add_new.php" class="add_new notice">Add new</a>
<?php

// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



	include('classes/database.php');
	$database = new Database;
	$database->connect();

	// Select all titles
	$sql = "SELECT * FROM titles";
	$titles = $database->query($sql);
		// var_dump($titles);

	// Loop through all titles
	foreach ($titles as $title) {
		?>
		<article class="title">
			<h2><?php echo $title['title'];?> (<?php echo $title['year'];?>)</h2>
			<h3><?php echo $title['type'];?></h3>
			<p>
				<img src="<?php echo $title['image'];?>">
				<?php echo $title['description'];?>
			</p>
			<p>Read more at <a href="http://www.imdb.com/title/<?php echo $title['imdb_id'];?>/">IMDB</a></p>
		</article>
		<?php
	}
?>
</body>
</html>