<?php
// Example of how to you jQuery AJAX together with Php
?>
<!DOCTYPE html>
<html>
<head>
	<title>AJAX/Php Play</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="forms-min.css">
</head>
<body>
<header>
	<nav>
		<h1 id="logo"><a href="index.php">AJAX/Php Play</a></h1>
	</nav>
</header>
<img src="loading.gif" id="loading">
<main>
	<form class="pure-form pure-form-stacked">
	    <fieldset>
	        <legend>Login</legend>

	        <label for="email">Email</label>
	        <input id="email" type="email" placeholder="Email">

	        <label for="password">Password</label>
	        <input id="password" type="password" placeholder="Password">

	        <label for="remember" class="pure-checkbox">
	            <input id="remember" type="checkbox"> Remember me
	        </label>

	        <button type="submit" id="login" class="pure-button pure-button-primary">Sign in</button>
	    </fieldset>
	</form>

</main>
<script src="jquery.js"></script>
<script src="script.js"></script>
</body>
