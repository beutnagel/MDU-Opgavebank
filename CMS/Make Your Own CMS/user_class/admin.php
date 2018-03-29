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
<h1>Welcome to the admin page</h1>
<p>Carles chillwave paleo, dreamcatcher sriracha next level drinking vinegar master cleanse twee. Pinterest Williamsburg Austin High Life roof party paleo mumblecore. DIY Brooklyn 8-bit, fap Terry Richardson sustainable PBR&B art party skateboard pug. Jean shorts sartorial gentrify vinyl. Fashion axe food truck DIY, lomo post-ironic master cleanse Etsy salvia you probably haven't heard of them distillery Thundercats squid Neutra ennui. Terry Richardson cornhole meh, Vice tote bag tousled swag stumptown pickled ugh narwhal twee roof party. Locavore ennui Odd Future Thundercats you probably haven't heard of them.</p>
<nav>
	<a href="page2.php">Goto Page 2</a>
	<a href="logout.php">logout</a>
</nav>
</body>
</html>