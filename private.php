<?php
session_start();
// there is an active session with a logged user
if (!isset($_SESSION['user'])) {
	header('location: login.php');
	exit();
}

$user = $_SESSION['user'];
// the HTML part only display is there is an active login
?>
<html>
	<head>
		<style>
			body {
				background-color: <?echo $user?>;
				color: silver;
			}
			a {color: yellow}
		</style>
	</head>
	<body>
	<img src="images/<?echo $user?>.jpeg"/>
	<br/>
	<a href="index.php"> back to index </a>
	<hr/>
	<a href="logout.php">logout</a>	
	</body>
</html>