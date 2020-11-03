<?php
    include("navbar.php"); /* includes the navbar */
    echo "</nav>";
  
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */

   
   $leaderboardid = $_POST['leaderboardid']; /*takes the ID entered */
    
   $query = "DELETE FROM `leaderboard`  WHERE `leaderboardid` = $leaderboardid"; /*removes the user that you select with ID */
   
   $result = mysqli_query($connection, $query);
   
   if($result)
   {
       echo 'Data deleted';
   }else{
       echo 'Data Not deleted';
   }
   mysqli_close($connect);

}else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */

?>
<br><a href="AdminMain.php">Go to main admin menu</a><br>
