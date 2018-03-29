<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Play</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<nav>
		<h1 id="logo"><a href="index.php">Session Play</a></h1>
	</nav>
</header>
<main>
	<article class="data-viewer">
		<?php
		if(isset($_SESSION)) {
			?>
			<p>Session:</p>
			<code>
			<?php var_dump($_SESSION);?>
			</code>
			<?php
		} else {
			?>
			<p>No Session Data</p>
			<?php
		}
		?>
	</article>
	
	<form action="add_to_session.php" method="post">
		<input type="text" name="name" id="name" placeholder="Name of key">
		<textarea name="message" id="message" cols="30" rows="10" placeholder="Value. Insert the data here"></textarea>
		<button type="submit" class="button">Add to session</button>
	</form>


	<a href="delete_session.php" class="button">Delete Entire Session</a>

<?php 
// Loop through each entry in the $_SESSION
foreach ($_SESSION as $key => $value) {
	?><a href="delete_session.php?key=<?php echo $key;?>" class="button">Delete <?php echo $key;?> (<?php echo $value;?>)</a>
	<?php
} 
?>


</main>
</body>
</html>
