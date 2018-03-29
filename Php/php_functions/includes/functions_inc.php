<?php

/* 	@description 	This file contains a number of functions that can be called when needed in the business logic
 *	@author 		Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@date 			23 April 2014
 *	@copyright		Free for all
 */


// - - - - - - - DATE FUNCTIONS - - - - - - - - - - -

date_default_timezone_set('UTC'); // Set the overall default timezone

function getCurrentTime() {
	return date('d M Y'); 	// format: 24 april 2014
}

function getYear() {
	return date('Y');	// format: 2014
}






// - - - - - - - MENU FUNCTIONS - - - - - - - - - - -

// Active Menu Item Function 
// Echos a string of "active" if $check is the same file as the current one.
// @param $check STRING of filename (.e.g 'gallery.php')

function ifActiveMenuItem($check) {
	$current = getCurrentPage();
	if($check === $current) {
		echo "active";
	} 
}

	function getCurrentPage() {
		$currentFile = $_SERVER['SCRIPT_NAME'];					// Get the filename from the global server variable
		$currentFile = stripcslashes($currentFile);				// Remove the / in the end
		$currentFile = explode("/", $currentFile);				// Break string into array
		$currentFile = $currentFile[count($currentFile)-1];		// Get the last array item
		return $currentFile;									// Return this value to where it was called from
	}






// - - - - - - - PAGE FUNCTIONS - - - - - - - - - - -


/*	HEAD FUNCTION
 *	Inserts an HTML header
 *	@params $options Array of optional settings
 *	@params $options['title'] Sets the title tag 
 *	@params $options['page_css'] Inserts a <link> to a new css file (e.g. 'gallery.css');
 */
$defaultTitle = "Welcome to my wonderful website";

function insertHead($options) {
	// Resolve defaults
	if(isset($options['title'])) {
		$title = $options['title'];
	} else {
		$title = $defaultTitle;
	}
	if(isset($options['page_css'])) {
		$link = '<link rel="stylesheet" type="text/css" href="'.$options['page_css'].'">';
	} else {
		$link = '';
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php echo $link;?>

</head>
<body>
	<?php
}


// End of file
?>