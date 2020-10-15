<?php
    include("navbar.php"); /* includes the navbar */
    echo "</nav>";
  
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */

   
   $forename = $_POST['username'];
   $surname = $_POST['username'];       
   $username = $_POST['username'];
   $Password = $_POST['Password'];
   $UserType = $_POST['UserType'];
   $email = $_POST['email']; /* this pulls data from the previous form */
    $pass = md5($Password); /* this encrypts the password */
   $sql = mysqli_query ($connection, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($sql)>0) { /*makes sure the username is unique */
	echo "Username already exists";
}
   else {
	$sql= "INSERT INTO users (forename,surname,username,Password,UserType,email) VALUES ('$forename','$surname','$username' , '$pass' , '$UserType','$email')"; /*this inserts the data taken from previous pages form into the database*/

if(!mysqli_query($connection,$sql)) {
	die ('Error: ' . mysqli_error($connection));
}
echo "Data Added Successfully";
}

}else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */
?>
<br><a href="AdminMain.php">Go to main admin menu</a><br>


