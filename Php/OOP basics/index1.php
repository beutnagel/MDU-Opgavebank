<!DOCTYPE html>
<html>
<head>
	<title>Simple Php Class</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Define a person class
class Person {
	public $name = "John Robertson";
	public $age = 32;
}

$john = new Person;
?>
<body>
<main>
	<h1>This is an example of a Php class</h1>
	<article>
		<h2>Name: <?php echo $john->name;?></h2>
		<h3>Age: <?php echo $john->age;?></h3>
	</article>
</main>
</body>
</html>