<?php
    include("navigationbar.php"); /* includes the navbar */
    echo "</nav>";

if($_SESSION['login']=="admin"){
if(isset($_POST['update']))
{

include("databaseconnection.php");  /* includes the connection to the database */
   
   $id = $_POST['id'];
   $forename = $_POST['forename'];
   $surname = $_POST['surname'];
   $username = $_POST['username'];
   $Password = $_POST['Password'];
   $UserType = $_POST['UserType'];
   $email = $_POST['email'];
    $pass = md5($Password); /*encrypts the password*/

   $query = "UPDATE `users` SET `forename`='".$forename."', `surname`='".$surname."',`username`='".$username."',`Password`='".$pass."',`UserType`= '".$UserType."',`email`='".$email."' WHERE `id` = $id";
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


