<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main_style.css">
	<link rel="stylesheet" type="text/css" href="nav_bar_style.css">
</head>
<body>

<ul class="menu">
  <li><a href="index.html">Home</a></li>
  <li><a class="active" href="login_page.php">Login</a></li>	
  <li><a href="about.html">About</a></li>
  <li><a href="info.html">Info</a></li>
  <li><a href="problems.php">Problems</a></li>	
</ul>

<div id="main-wrapper">
<div class="login-form">
<p>Login</p>
<!--use prepared statements later to prevent SQL injection-->
<form action="includes/login.inc.php" method="POST">
<label>User Name</label>
<input type="text" name="user_name" placeholder="UserName">
<label>Password</label>
<input type="password" name="pwd" placeholder="password">
<button type="submit" name="submit">Log in</button>
</form>
</div>
<h1>Some cool text</h1>
</div>
</body>
</html>


