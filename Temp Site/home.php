<?php
    include("navigationbar.php"); /* This will include the navigation bar to the page */

$connection =mysqli_connect("localhost", "HNDCSSA19", "rAhXexAcqr", "HNDCSSA19")
or die ('Could not connect to mysql');

$query = "SELECT * FROM >>>Put database connection here<<<"; /* put in db connection (Table name) */
$result = mysqli_query($connection,$query)
or die ('could not execute query');							
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ echo
    
  
	'<div class="container">
		<div class="row">
        <div class="column">
 			<div class="col-18">
				<div class="card" border-success mb-3" style="max-width: 20rem;">

					<h5 class="card-title">'.$row['Title'].'</h5>
					<p class="card-text">'.$row['Description'].'</p>
                    <img class="" src="'.$row['Image'].'"  alt="" height="300" width="200" >
                    <div class="col">
					<div class="card-body">
                    <a href=game.php?id='.$row[ID].' class="btn btn-primary">Play</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>'
    
;} ?>

    

