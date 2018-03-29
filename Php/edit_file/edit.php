<?php
// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Edit Content</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<nav>
		<h1 id="logo"><a href="edit.php">Save Content in File</a></h1>
	</nav>
</header>
<?php
// Display success message
if(isset($_GET["success"])) {
	?>
	<h2 class="success">File updated!</h2>
	<?php
}
?>
<main>
	<form action="process.php" method="post">
		<textarea id="text" name="text">
			<?php			
				// Read file
				$filename = "edit.txt";
				echo($file->read($filename));
			?>
		</textarea>
		<button type="submit" class="button">Save content</button>
	</form>
</main>
</body>
</html>