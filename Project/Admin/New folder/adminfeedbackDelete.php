<?php
    include("navigationbar.php"); /* includes the navbar *//* includes the navbar */
    echo "</nav>";
?>
  <html>

    <head>

        <title> PHP DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="adminleaderboardDeleteDone.php" method="post"><br>

            ID To Delete: <input type="text" name="leaderboardid" required><br><br> <!-- this takes the ID of the record you want to delete -->
                     
            <input type="submit" name="update" value="Delete Data">

        </form>
<a href="AdminMain.php">Go to main admin menu</a><br>
    </body>


</html>
<?php
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */
$result = mysqli_query($connection,"SELECT * FROM leaderboard"); /* selects the users tables data */
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

