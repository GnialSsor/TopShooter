<?php
    include("navbar.php"); /* includes the navbar */
    echo "</nav>";
?>
  <html>

    <head>

        <title> PHP DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="adminareaDeleteDone.php" method="post"><br>

            ID To Delete: <input type="text" name="id" required><br><br> <!-- this takes the ID of the record you want to delete -->
                     
            <input type="submit" name="update" value="Delete Data">

        </form>
<a href="AdminMain.php">Go to main admin menu</a><br>
    </body>


</html>
<?php
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */
$result = mysqli_query($connection,"SELECT * FROM users"); /* selects the users tables data */
echo "<table border=1>
<br>Users<tr>
<th>Forename</th>
<th>Surname</th>
<th>Username</th>
<th>Password</th>
<th>UserType</th>
<th>Email</th>
<th>ID</th>
</tr>";						
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{ 
echo "<form action='' method='post'>";
echo "<tr>";
echo "<td><input type='text' name='forename' value='".$row['forename']."'</td>";
echo "<td><input type='text' name='surname' value='".$row['surname']."'</td>";
echo "<td><input type='text' name='username' value='".$row['username']."'</td>";
echo "<td><input type='text' name='password' value='".$row['Password']."'</td>";
echo "<td><input type='integer' name='UserType' value='".$row['UserType']."'</td>";
echo "<td><input type='integer' name='email' value='".$row['email']."'</td>"; 
echo "<td><input type='integer' name='ID' value='". $row['ID']."'</td>";

echo "</tr>";
echo "</form>";/*this displays the user data*/



}
   }else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */
?>

