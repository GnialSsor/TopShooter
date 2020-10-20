<?php
    include("navbar.php"); /* includes the navbar */
    include("databaseconnection.php");  /* includes the connection to the database */
$username=$_POST["username"];
$password=$_POST["password"];

$pass = md5($password);

$sql = mysqli_query ($connection, "SELECT * FROM users WHERE username='$username' AND password='$pass'");
if (mysqli_num_rows($sql)==1) {
    echo "<h3>Welcome<br>";
    while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
      $uT = $row['UserType'];
        $id = $row['ID'];
    }
    if ($uT == 1){
        echo "Admin";
        session_start();
        $_SESSION['login']="admin";          
	    header("Location:AdminMain.php" );
/*sets session for an admin user*/        
    }
    elseif ($uT == 0){
        echo "Regular User";
                session_start();
        $_SESSION['login']= "regular";
        $_SESSION['id'] = $id;
        header("Location:index.php" );
/*sets session for a regular user*/
    }else{
        echo "Error";
    }
}
else {
	echo "<h3>Username and password do not match<br>Please try again</h3>";
    echo $pass;
    echo $username;
    }
?>