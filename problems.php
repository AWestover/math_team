<?php

session_start();
if (isset($_SESSION['login'])) {
	if ($_SESSION['login'] == 'yes') {
		echo "You are in";
	}
}
else {
	header("Location: login_page.php?login=what_are_you_doing_man");
	exit();
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Stuff</title>
	<link rel="stylesheet" type="text/css" href="main_style.css">
	<link rel="stylesheet" type="text/css" href="nav_bar_style.css">
</head>

<body>
<ul class="menu">
  <li><a href="index.html">Home</a></li>
  <li><a href="login_page.php">Login</a></li>	
  <li><a href="about.html">About</a></li>
  <li><a href="info.html">Info</a></li>
  <li><a class="active" href="problems.php">Problems</a></li>	
</ul>
</body>

</html>
