<?php
    include("navigationbar.php"); /* includes the navbar */
    echo "</nav>";
  
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */

   
   $id = $_POST['id']; /*takes the ID entered */
    
   $query = "DELETE FROM `users`  WHERE `id` = $id"; /*removes the user that you select with ID */
   
   $result = mysqli_query($connection, $query);
   
   if($result)
   {
       echo 'Data deleted';
   }else{
       echo 'Data Not deleted';
   }
   mysqli_close($connection);

}else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */

?>
<br><a href="AdminMain.php">Go to main admin menu</a><br>
