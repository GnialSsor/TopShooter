<?php
    include("navigationbar.php"); /* includes the navbar */
    echo "</nav>";

if($_SESSION['login']=="admin"){
if(isset($_POST['update']))
{

include("databaseconnection.php");  /* includes the connection to the database */
   
   $username = $_POST['username'];
   $forename = $_POST['forename'];
   $surname = $_POST['surname'];
   $email = $_POST['email'];
   $review = $_POST['review'];
   $usersid = $_POST['usersid'];
   $feedbackid = $_POST['feedbackid'];
 
   $query = "UPDATE `feedback` SET `username`='".$username."', `forename`='".$forename."',`surname`='".$surname."',`email`='".$email."',`review`= '".$review."',`users.id`= '".$usersid."' WHERE `feedbackid` = $feedbackid";
   /* updates the user tables using data from the form*/
   $result = mysqli_query($connection, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connection);
}
}else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */

?>
<br><a href="AdminMain.php">Go to main admin menu</a><br>


