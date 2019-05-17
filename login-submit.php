<?php

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];


if(empty($user) || empty($pass)) {
	header("Location: login.php?error=Must enter username or password");
	exit;
}

if($user == "admin" && $pass == "pass1234") {
	// initialize the session
	$_SESSION['username'] = $user;

	header("Location: blog.php");
} else {
	header("Location: blog.php?error=Username or password are incorrect");
	exit;
}
