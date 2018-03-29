<?php
// Start the session
session_start();
$_SESSION['loggedIn'] = true;
header('Location: index.php');
?>