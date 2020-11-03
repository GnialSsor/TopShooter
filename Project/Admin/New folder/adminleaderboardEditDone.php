<?php
    include("navigationbar.php"); /* includes the navbar */
    echo "</nav>";

if($_SESSION['login']=="admin"){
if(isset($_POST['update']))
{

include("databaseconnection.php");  /* includes the connection to the database */
   
   $username = $_POST['username'];
   $score = $_POST['score'];
   $usersid = $_POST['users.id'];
   $leaderboardid = $_POST['leaderboardid'];
   $position = $_POST['position'];
 
   $query = "UPDATE `leaderboard` SET `username`='".$username."', `score`='".$score."',`users.id`='".$usersid."',`position`= '".$position."' WHERE `leaderboardid` = $leaderboardid";
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


