<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Company X</h2><br>
	<label><a href="home.php">Home</a> <a href="login.php">Login</a> <a href="reg.php">Registration</a></label>
  </div>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  	
  
  	<div class="input-group">
  <h1>Welcome</h1>
  	</div>
  	  </form>
</body>
</html>