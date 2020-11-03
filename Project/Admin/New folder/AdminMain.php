<html>
<head>
<title>Admin</title>
    <link rel="stylesheet" href="css.css" >
</head>
<?php
 include("navbar.php"); /* includes the navbar */
 include("databaseconnection.php");  /* includes the connection to the database */
if($_SESSION['login']=="admin"){
    }else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */
?>
     </nav>
<body>
    <div class="container">
    <h3> User Data</h3>
    <a href="adminareaEdit.php">To Edit user data</a><br>
    <a href="adminareaAdd.php">To Add Users</a><br>
    <a href="adminareaDelete.php">To delete users</a><br>
            <h3> Leaderboard Data </h3>
    <a href="adminleaderboardEdit.php">To edit leaderboard data</a><br>
    <a href="adminleaderboardDelete.php">To remove scores from leaderboard</a><br>
                <h3> Feedback Data </h3>
    <a href="adminleaderboardEdit.php">To edit feedback</a><br>
    <a href="adminleaderboardDelete.php">To remove feedback</a><br>
        <!--links to access the functions of admin panel -->
    </div>
</body>
</html>