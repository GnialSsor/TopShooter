<?php
    include("navigationbar.php"); /* This will include the navigation bar to the page */
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
      <h1>Contact Us</h1>
      <h3>Please use the form below to contact us:</h3>
      

      <form action ="contactusDone.php" method="post">
            Email:<input type="text" name="email" required><br><br>
            
            Message:<input type="text" name="message" required><br><br>

            <input type="submit" name="Submit" value="Submit">

      </form>
    </body>
</html>