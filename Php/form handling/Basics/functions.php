<?php


function getMethod() {
// Which method was the data sent with
	// Check to see if the global POST varible is populated (not empty). 
	// If this is true, then something was sent through POST. 
	// if it was empty, something might have been sent through GET
	
	if($_POST) { 
		$method = "POST";
	} elseif($_GET) {	
		$method = "GET";
	} else {
		$method = "unknown";
	}
	return $method;
}


function getMessage($method) {
	// Get message the message depending upon the method it was sent with
	$message = "";
	switch ($method) {
		case 'POST':
			$message = $_POST['message'];
			break;
	
		case 'GET':
			$message = $_GET['message'];
			break;
		
		default:
			$message = "Ups, no method was defined.";
			break;
	}
	// Check to see if message is empty
	if(empty($message)) {
		$message = "Hmmm the message was empty";
	}

	return $message;
}


?>