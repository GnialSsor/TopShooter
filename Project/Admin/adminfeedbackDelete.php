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

        <form action="adminfeedbackDeleteDone.php" method="post"><br>

            ID To Delete: <input type="text" name="feedbackid" required><br><br> <!-- this takes the ID of the record you want to delete -->
                     
            <input type="submit" name="update" value="Delete Data">

        </form>
<a href="AdminMain.php">Go to main admin menu</a><br>
    </body>


</html>
<?php
if($_SESSION['login']=="admin"){
include("databaseconnection.php");  /* includes the connection to the database */
$result = mysqli_query($connection,"SELECT * FROM feedback");
echo "<table border=1>
<br>Feedback<tr>
<th>username</th>
<th>forename</th>
<th>surname</th>
<th>email</th>
<th>review</th>
<th>users.id</th>
<th>feedbackid</th>
</tr>";						
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{ 
echo "<form action='' method='post'>";
echo "<tr>";
echo "<td><input type='text' name='username' value='".$row['username']."'</td>";
echo "<td><input type='text' name='forename' value='".$row['forename']."'</td>";
echo "<td><input type='text' name='surname' value='".$row['surname']."'</td>";
echo "<td><input type='text' name='email' value='".$row['email']."'</td>";
echo "<td><input type='integer' name='review' value='".$row['review']."'</td>";
echo "<td><input type='Integer' name='users.id' value='".$row['users.id']."'</td>";
echo "<td><input type='integer' name='feedbackid' value='".$row['feedbackid']."'</td>";

echo "</tr>";
echo "</form>";/*this displays the user data*/



}
   }else{header("Location:login.php" );} /* if not logged in as admin directs them to login page */
?>

