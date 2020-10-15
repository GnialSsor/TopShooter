
<?php
    include("navbar.php"); /* includes the navbar */
    echo "</nav>";
?>
<html>

    <head>
        <title> PHP ADD DATA </title>
    </head>
        <body>

        <form action="adminareaAddDone.php" method="post"><br>
            
            Forename:<input type="text" name="forename" required><br><br>
            
            Surname:<input type="text" name="surname" required><br><br>

            Username:<input type="text" name="username" required><br><br>

            Password:<input type="text" name="Password" required><br><br>

            UserType:<input type="number" name="UserType" required><br><br>
            
            Email:<input type="text" name="email" required><br><br>

            <input type="submit" name="update" value="Add Record">

        </form> <!-- this form carries information into the next page -->
<a href="AdminMain.php">Go to main admin menu</a><br>
    </body>


</html>

<?php
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */
$result = mysqli_query($connection,"SELECT * FROM users"); /* pulling the users info from database */
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
echo "</form>";/* this form displays the information pulled from database */




}
    }else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */
?>
    


