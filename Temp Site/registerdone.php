<?php
    include("navbar.php"); /* includes the navbar */
    include("databaseconnection.php");  /* includes the connection to the database */

$username=$_POST["username"];
$password=$_POST["password"];
$forename=$_POST["forename"];
$surname=$_POST["surname"];
$repeatpassword=$_POST["repeatpassword"];
$email=$_POST["email"];

$sql = mysqli_query ($connection, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($sql)>0) {
	echo "<h2>Username already exists</h2>";/*checks if the user already exists*/
}
elseif($password != $repeatpassword) {
	echo "<h2>Passwords do not match</h2>"; /*checks password matches*/
}
else {
    $hash = md5($password);
	$sql= "INSERT INTO users (username, password, forename, surname, email) VALUES ('$username', '$hash','$forename','$surname','$email')";/*inserts the new user into the database*/

if(!mysqli_query($connection,$sql)) {
	die ('Error: ' . mysqli_error($connection));
}
echo "<h2>You have created your username and password<h2>";
}
?>