<?php
session_start();
if (isset($_SESSION['username'])) {
	header('Location: home.php');
}


require_once('functions.php');
require_once('login.html');
//DATABASE PHP
$accounts = [
	'user1' => 'password1',
	'user2' => 'password2',
	'admin' => 'admin'
];


if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = htmlspecialchars($_POST['username']); //change user input to have control over it
	$password = htmlspecialchars($_POST['password']);
	if (authenticate($username, $password, $accounts)) {
		$_SESSION['username'] = $username;
		redirect('home.php');
		die();
	}
	else {
		echo "<p class='form_auth_err'>Incorrect username or password!</p>";
	}

}
