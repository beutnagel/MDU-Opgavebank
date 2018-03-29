<?php

function checkActive($check) {
	$currentFile = $_SERVER["PHP_SELF"];
	//var_dump($currentFile);
	$parts = Explode('/', $currentFile);
	//var_dump($parts);
	$currentFile = $parts[count($parts) - 1];
	//var_dump($currentFile);
	if ($check === $currentFile) {
		echo "active ";
	}
}

?>
<?php checkActive("index.php");?>
<html>
<head>
	<title>Active menu test</title>
	<style type="text/css">.active {color: #00FFFF;}</style>
</head>
<body>
<nav>
	<li><a href="index.php" class="<?php checkActive("index.php");?>">Home</a></li>
	<li><a href="page2.php" class="<?php checkActive("page2.php");?>">Page 2</a></li>
</nav>