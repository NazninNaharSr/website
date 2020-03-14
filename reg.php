
<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
<div class="input-group">
      <label>Name</label>
      <input type="text" name="name" value="name">
    </div>

<div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="email">
    </div>
    <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="username">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
      <label>Gender</label>
      <input type="radio" name="male" value="other">Male  <input type="radio" name="female" value="female">Female   <input type="radio" name="other" value="other">Other
      
    </div>

<div class="input-group">
      <label>DOB</label>
      <input type="datetime" name="datetime" value="datetime">  
    </div>


  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">submit</button>
  	</div>
    <div class="input-group">
      <button type="reset" class="btn" name="reg_user">reset</button>
    </div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>