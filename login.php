<?php
session_start();
// there is an active session with a logged user
if (isset($_SESSION['user'])) {
	header('location: index.php');
	exit();
}

// does the login.php request comes with some user id?

if (isset($_GET['user'])) {
	$_SESSION['user'] = $_GET['user'];
	header('location: index.php');
	exit();
}

// the HTML part only display is there is no active login
?>

<html>
	<h1> login page </h1>
	<h2> please choose a color </h2>
	
	<p><a href="login.php?user=red">red</a></p>
	<p><a href="login.php?user=green">green</a></p>
	<p><a href="login.php?user=blue">blue</a></p>
</html>