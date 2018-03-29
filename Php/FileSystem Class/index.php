<?php
// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Using the Php FileSystem class</title>
</head>
<body>
<main>
	<h3>Read from file</h3>
	<p><?php 
			// Read file
			$filename = "text.txt";
			echo($file->read($filename));
		?>
	</p>



	<h3>Write to file (no feedback, it just does it)</h3>
	<p><?php
		// Write to file (silent)
		$content = "This is written in a new file.";
		$filename = "bib.txt";
		$file->write($filename,$content);
		echo "Written to " . $filename;
	?>
	</p>



	<h3>Write to file (with feedback whether it succeeded)</h3>
	<p><?php
		// Write to file (with error check)
		$content = "This is also written in a new file.";
		$filename = "bob.txt";
		if($file->write($filename,$content)) {
			?>Written to file OK: <?php echo $filename;
		} else {
			?>Something went wrong writing to file: <?php echo $filename;
		}
	?>
	</p>



	<h3>Read from the file just written to</h3>
	<p><?php 
			// Read file
			echo($file->read($filename));
		?>
	</p>



	<h3>Check if file is empty</h3>
	<p><?php
		// Check if a file is empty
		if($file->isEmpty("bob.txt")) {
			?>File is empty<?php
		} else {
			?>File is <strong>not</strong> empty<?php
		}
	?>
	</p>
</main>
</body>
</html>