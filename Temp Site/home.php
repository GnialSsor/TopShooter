<?php
    include("navigationbar.php"); /* This will include the navigation bar to the page */

$connection =mysqli_connect("localhost", "HNDCSSA19", "rAhXexAcqr", "HNDCSSA19")
or die ('Could not connect to mysql');

$query = "SELECT * FROM >>>Put database connection here<<<"; /* put in db connection (Table name) */
$result = mysqli_query($connection,$query)
or die ('could not execute query');							
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ echo
    
  
	'<div class="container">
<a href=gameMap.php class="btn btn-primary">Play</a>
</div>'
    
;} ?>

    

