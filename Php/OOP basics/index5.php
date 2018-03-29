<!DOCTYPE html>
<html>
<head>
	<title>Simple Php Class</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Define a person class
class Person {
	protected $name;
	protected $age;

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
	public function set_name($name) {
		$this->name = $name;
	}
	public function set_age($age) {
		$this->age = $age;
	}
}
class Employee extends Person {
	private $position;

	public function __construct($name, $age, $position) {
		$this->position = $position;
		$this->name = $name;
		$this->age = $age;
	}
	public function get_position() {
		return $this->position;
	}
}
class Customer extends Person {
	private $customerNumber;
	public function __construct($name, $age, $customerNumber) {
		$this->customerNumber = $customerNumber;
		$this->name = $name;
		$this->age = $age;
	}
	public function get_customerNumber() {
		return $this->customerNumber;
	}

}
$johnny = new Customer("Johnny Robertson", 54, 34223);
$kurt = new Employee("Kurt Kreol", 42, "Regional Sales Manager");

?>
<body>
<main>
	<h1>Management</h1>
	<article>
		<h2>Name: <?php echo $johnny->get_name();?></h2>
		<h3>Age: <?php echo $johnny->get_age();?></h3>
		<h3>Customer Number: <?php echo $johnny->get_customerNumber();?></h3>
	</article>
	<article>
		<h2>Name: <?php echo $kurt->get_name();?></h2>
		<h3>Age: <?php echo $kurt->get_age();?></h3>
		<h3>Position: <?php echo $kurt->get_position();?></h3>
	</article>
	<?php 
	var_dump($johnny);
	var_dump($kurt);
	?>
</main>
</body>
</html>