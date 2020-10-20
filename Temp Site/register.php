<?php  
    include("navbar.php"); /* includes the navbar */
    include("databaseconnection.php");  /* includes the connection to the database */
?>
<link rel="stylesheet" href="css.css" >
<html>
<body>
<form action ="registerdone.php" method="post">
  <div class="form-group">
    <label for="exampleInputUsername">Username</label><br>
    <input type="username" name="username"  id="exampleInputusername" aria-describedby="usernameHelp" placeholder="Enter username">
     <!--the username entered here -->
  </div>
      <div class="form-group">
    <label for="email">Email</label><br>
    <input type="Email" name="email"  id="email" placeholder="Email">
  </div>
    <!--the email entered here -->
		 <div class="form-group">
    <label for="Forename">Forename</label><br>
    <input type="Forename" name="forename"  id="Forename" placeholder="Forename">
  </div>
    		 <div class="form-group">
    <label for="Surname">Surname</label><br>
    <input type="Surname" name="surname"  id="Surname" placeholder="Surname">
  </div>
    <!--the address entered here -->
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label><br>
    <input type="Password" name="password"  id="exampleInputPassword1" placeholder="Password">
  </div>
    <!--the password entered here -->
		 <div class="form-group">
    <label for="exampleInputrepeatPassword1">Repeat Password</label><br>
    <input type="Password" name="repeatpassword"  id="exampleInputRepeatPassword1" placeholder="Repeat Password">
             <!--the repeated password entered here -->
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
    </html>