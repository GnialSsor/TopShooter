<?php
    include("navbar.php"); /* includes the navbar */
    echo "</nav>";
 ?> 
<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="adminleaderboardEditDone.php" method="post"><br>

            New Username: <input type="text" name="username" required><br><br>
            
            New Score:<input type="text" name="score" required><br><br>
            
            New User ID:<input type="text" name="users.id" required><br><br>

            New Leaderboard ID:<input type="text" name="leaderboardid" required><br><br>

            New Position:<input type="text" name="position" required><br><br>
            

            <input type="submit" name="update" value="Update Data">
            <!-- this takes the data that you want to update -->

        </form>
<a href="AdminMain.php">Go to main admin menu</a><br>
    </body>


</html>
<?php
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */
$result = mysqli_query($connection,"SELECT * FROM leaderboard");
echo "<table border=1>
<br>Leaderboard<tr>
<th>username</th>
<th>score</th>
<th>users.id</th>
<th>leaderboardid</th>
<th>position</th>
</tr>";						
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{ 
echo "<form action='' method='post'>";
echo "<tr>";
echo "<td><input type='text' name='username' value='".$row['username']."'</td>";
echo "<td><input type='text' name='score' value='".$row['score']."'</td>";
echo "<td><input type='text' name='users.id' value='".$row['users.id']."'</td>";
echo "<td><input type='text' name='leaderboardid' value='".$row['leaderboardid']."'</td>";
echo "<td><input type='integer' name='position' value='".$row['position']."'</td>";

echo "</tr>";
echo "</form>";/*this displays the user data*/



}
    }else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */
?>
