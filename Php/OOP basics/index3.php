<!DOCTYPE html>
<html>
<head>
	<title>Simple Php Class</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Define a person class
class Person {
	private $name;
	private $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function get_name() {
		return $this->name;
	}
	public function get_age() {
		return $this->age;
	}
}

$johnny = new Person("Johnny Robertson", 54);
$kurt = new Person("Kurt Kreol", 42);
?>
<body>
<main>
	<h1>Management</h1>
	<article>
		<h2>Name: <?php echo $johnny->get_name();?></h2>
		<h3>Age: <?php echo $johnny->get_age();?></h3>
	</article>
	<article>
		<h2>Name: <?php echo $kurt->get_name();?></h2>
		<h3>Age: <?php echo $kurt->get_age();?></h3>
	</article>
</main>
<?php var_dump($kurt); ?>
</body>
</html>