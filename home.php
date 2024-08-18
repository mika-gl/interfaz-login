<?php
session_start();
require_once('functions.php');


if (!isset($_SESSION['username'])) {
	redirect('login.php');
	die();
}


include_once('home_view.php');

