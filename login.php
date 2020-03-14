
<!DOCTYPE html>
<html>
<head>
  <title>LoginL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="reg.php">Sign up</a>
    </p>
  </form>
<?php
if(isset($_POST['login']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB"; 
$conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  $password=$_POST['password'];
  $username=$_POST['username'];
  $sql="SELECT * FROM `reg` WHERE username='$name' AND password='$password'";
  $result=$conn->query($sql); 
   if ($result->num_rows > 0)
  {
     while($row = $result->fetch_assoc()){
    //$_SESSION['name']=$row['name'];
    header("Location:login.php");
        echo "0 results";
     }
  }
  else
  {
    echo "No data found.<br/>";
  }

  
mysqli_close($conn);    
}


?>










</body>
</html>