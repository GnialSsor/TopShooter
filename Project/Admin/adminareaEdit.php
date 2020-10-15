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

        <form action="adminareaEditDone.php" method="post"><br>

            ID To Update: <input type="text" name="id" required><br><br>
            
            New Forename:<input type="text" name="Forename" required><br><br>
            
            New Surname:<input type="text" name="Surname" required><br><br>

            New Username:<input type="text" name="username" required><br><br>

            New Password:<input type="text" name="Password" required><br><br>

            New UserType:<input type="number" name="UserType" required><br><br>
            
            New Email:<input type="text" name="email" required><br><br>
            

            <input type="submit" name="update" value="Update Data">
            <!-- this takes the data that you want to update -->

        </form>
<a href="AdminMain.php">Go to main admin menu</a><br>
    </body>


</html>
<?php
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */
$result = mysqli_query($connection,"SELECT * FROM users");
echo "<table border=1>
<br>Users<tr>
<th>forename</th>
<th>surname</th>
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
