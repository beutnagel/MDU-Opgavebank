<?php 
	include('user.class.php');
	$user = new USER;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my site</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<main class="container">
	<section class="flat-form">
	    <section id="login" class="form-action show">
	        <h1>Login</h1>
	        <p>
	        	Please sign in to access the admin pages
	        </p>
	        <form action="admin.php" method="post">
	            <ul>
	                <li>
	                    <input id="username" name="username" type="text" placeholder="User Name (john)">
	                </li>
	                <li>
	                    <input id="password" name="password" type="password" placeholder="Password (123)">
	                </li>
	                <li>
	                    <input type="submit" value="Login" class="button">
	                </li>
	            </ul>
	        </form>
			<?php 
			$user->checkLoginError();
			?>	        
	    </section>
	</section>
</main>
</body>
</html>