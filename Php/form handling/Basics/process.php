<!DOCTYPE html>
<html>
<head>
	<title>Example of form handling with Php</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>The following was received</h1>
<section id="result">
<?php 
	include_once('functions.php'); 
	
	/* 
	 *	Here starts our processing of the data sent to the server
	 * 	1) First we determine which method was used
	 * 	2) Then we get the message
	 * 	3) Finally we output it in our HTML
	 *  
	 */

	$method = ""; // we start without knowing which method was used 

	// call function getMethod() which then returns the type of method used or "unknown"
	$method = getMethod();

	// get the message depending on the method it was sent with
	$message = getMessage($method);

?>
	<h2>Data received through: <?php echo $method;?></h2>
	<p><?php echo $message;?></p>

</section>
</body>
</html>