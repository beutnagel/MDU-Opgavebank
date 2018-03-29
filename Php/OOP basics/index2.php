<!DOCTYPE html>
<html>
<head>
	<title>Simple Php Class</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Define a person class
class Person {
	public $name;
	public $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
}

$johnny = new Person("Johnny Robertson", 54);
$kurt = new Person("Kurt Kreol", 42);
?>
<body>
<main>
	<h1>Customers</h1>
	<article>
		<h2>Name: <?php echo $johnny->name;?></h2>
		<h3>Age: <?php echo $johnny->age;?></h3>
	</article>
	<article>
		<h2>Name: <?php echo $kurt->name;?></h2>
		<h3>Age: <?php echo $kurt->age;?></h3>
	</article>
</main>
<?php 

var_dump($kurt);
?>
</body>
</html>