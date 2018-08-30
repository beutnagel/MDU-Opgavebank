<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// Get all types from the database
	include('classes/database.php');
	$database = new Database;
	$database->connect();

	// Select all types
	$sql = "SELECT * FROM types";
	$types = $database->query($sql);
?>

  <form action="process.php" method="post">
  	<label for="imdb_id">IMDB id (<em>taken from the url: http://www.imdb.com/title/</em><strong>tt0103874</strong>/)</label>
  	<input type="text" name="imdb_id" placeholder="e.g. tt0103874">
  	
  	<label for="title">Name</label>
  	<input type="text" name="title" placeholder="e.g. Batman Begins">

  	<label for="description">Description</label>
  	<textarea name="description"></textarea>
  	  	
  	<label for="image">Image</label>
  	<input type="text" name="image" placeholder="absolute url to image">

  	<label for="year">Year</label>
  	<input type="text" name="year" placeholder="e.g. 1997">

  	<label for="type">Type</label>
  	<select name="type">
  		<?php
  		// insert an option for each type
  		foreach ($types as $type) {
  			?>
			<option value="<?php echo $type['type'];?>"><?php echo $type['type'];?></option>
  			<?php
  		}
  		?>
  	</select>

  	<input type="submit" name="submit" value="Add">
  </form>
</body>
</html>