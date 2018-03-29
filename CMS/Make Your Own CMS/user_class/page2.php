<?php
include('user.class.php');
$user = new USER;
$user->checkCredentials();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="odd">This is Page 2</h1>
<p>Brooklyn Pitchfork beard yr tousled biodiesel. Bespoke pickled fashion axe, Intelligentsia brunch roof party meggings messenger bag mlkshk jean shorts Blue Bottle Portland. +1 beard Intelligentsia, High Life post-ironic wolf put a bird on it bitters biodiesel. Fingerstache next level chia banh mi, narwhal Tumblr pop-up Odd Future disrupt single-origin coffee Schlitz Williamsburg swag messenger bag stumptown. Austin flexitarian farm-to-table synth jean shorts fashion axe squid banjo cardigan, chambray beard Carles. Try-hard distillery pug, beard four loko 8-bit viral PBR&B banh mi cornhole. Literally sriracha wayfarers raw denim roof party butcher.</p>
<nav>
	<a href="admin.php">Back to admin</a>
	<a href="logout.php">logout</a>
</nav>
</body>
</html>