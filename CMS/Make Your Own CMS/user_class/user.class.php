<?php

class User {

	private $loggedIn = false;
	private $username = "john";
	private $password = "123";

	public function __construct() {
		// Check if session has been started, if not then start it
		if(isset($_SESSION) === false) {
			session_start();
		}
	}


	public function checkCredentials() {
		// check if session is set from previous successful login
		if (isset($_SESSION['loggedIn'])) { 
			$this->loggedIn = $_SESSION['loggedIn']; 
		}
		// else do the login 
		elseif ($this->loggedIn === false) {
			$this->login();
		} 
	}


	private function login() {
		// firstly check if the POST data has been sent
		if (isset($_POST['username']) && isset($_POST['password'])) {
			// check if username and password is correct
			if ($_POST['username'] === $this->username && $_POST['password'] === $this->password) {
				$_SESSION['loggedIn'] = true;
			} else { // NOT the correct username and/or password
				header('Location: login.php?error=wrong_login');
			}
		} else { // IF NOT the necessary POST data, go to login form
			header('Location: login.php?error=missing_form_data');
		}
	}


	public function checkLoginError() {
		// insert error if set
		if(isset($_GET['error'])) {
			?>
			<h2 class="error">Wrong user name or password</h2>
			<?php
		}	
	}


	public function logOut() {
		// destroy the session variable
		unset($_SESSION['loggedIn']); 
		// go back to the login form
		header('Location: login.php'); 
	}

}



?>