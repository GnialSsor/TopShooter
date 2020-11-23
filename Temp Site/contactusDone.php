<?php
  
    include("navigationbar.php"); /* includes the navbar */
    include("databaseconnection.php");  /* includes the connection to the database */

$email=$_POST["email"];
$review=$_POST["message"];

$sql= "INSERT INTO feedback (email, review) VALUES ('$email', '$review')";
mysqli_query($connection,$sql)
?>