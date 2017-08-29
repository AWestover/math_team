<?php

session_start();
if (isset($_SESSION['login'])) {
	if ($_SESSION['login'] == 'yes') {
		echo "You are in";
	}
}
else {
	header("Location: login_page.php?login=dudedudedudedudeduede");
	exit();
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Stuff</title>
	<link rel="stylesheet" type="text/css" href="main_style.css">
</head>

<body>



</body>

</html>
