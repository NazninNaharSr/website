<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

	<title>X home</title>
</head>
<body >
<FORM method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="header">
			<label>X company</label>
		<label>
		<a href="home.php"> Home</a> <a href="login.php">Login</a>  <a href="reg.php">Registration</a>
		<form method="post" action="home.php">
		<form method="post" action="login.php">
		<form method="post" action="reg.php">
		</label>
	</div>
	<div class="input-group">
		<p>Welcome to X company</p>
	</div>
</FORM>
</body>
</html>