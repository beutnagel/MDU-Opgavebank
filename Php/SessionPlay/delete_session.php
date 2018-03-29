<?php
session_start();
	var_dump($_SESSION);

// if deleting a single key
if(isset($_GET['key'])) {
	unset($_SESSION[$_GET['key']]);
	var_dump($_SESSION);
} else {
	// else end the entire session
	session_start();
	session_unset();
}


header('Location: index.php');
?>