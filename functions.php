<?php
function authenticate($user,$pass, $database) {
	return	isset($database["$user"]) && isset($database["$pass"]) && ($database["$user"] == $database["$pass"]); 
}
function redirect($location) {
	header("Location: $location");
}
