<?php
// Start the session
session_start();
if(!empty($_POST['message']) && !empty($_POST['name'])) {
	$_SESSION[$_POST['name']] = $_POST['message'];
} else {
	die("missing message or name");
}
//var_dump($_SESSION);
header('Location: index.php');
?>