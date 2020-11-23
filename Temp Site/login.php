<?php 
    include("navigationbar.php"); /* includes the navbar */
    include("databaseconnection.php");  /* includes the connection to the database */
?>

<html>
<head>

<title>loginpage</title>
</head>

<body>
    <h1>Login</h1>
    <p>If you have an account please login. If you do not please <a href="register.php">Register here</a></p>
	<form action ="logindone.php" method="post">
  <div class="form-group">
    <label for="exampleInputUsername">Username</label><br>
    <input type="username" name="username" id="exampleInputusername" aria-describedby="usernameHelp" placeholder="Enter username">
      <!--user enters the username-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label><br>
    <input type="Password" name="password" id="exampleInputPassword1" placeholder="Password">
  </div><!--user enters the password-->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

</html>