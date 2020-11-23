<!doctype html>
<html lang="en">
    
  <head>
      

    <!-- Required meta tags -->
    <meta charset="utf-8">
	 <!-- Responsive meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <link rel="stylesheet" href="topshooter.css" crossorigin="anonymous">

<!---- Replace logo.jpeg with appropriate image --->      
	  	 	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php"><img src=logo.jpeg name=TopShooter height="50" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            
  <!--- set appropriate variable file names for rest of files (logout.php, aboutus.php etc) -->      
        <?php  
        session_start();
      error_reporting(0);
           if ($_SESSION['login'] == "regular"){
               $_SESSION['id'];
        $id = $_SESSION['id'];
               echo "<li class='nav-item active'>";
               echo "<a class='nav-link' href='home.php'>Home<span class='sr-only'>(current)</span></a>";
               echo "</li>";
               echo "<li class='nav-item'>
                    <a class='nav-link' href='logout.php'>Logout</a>
                </li>";
                echo "<li class='nav-item'>
                    <a class='nav-link' href='aboutus.php'>About Us</a>
                </li>";
                echo "<li class='nav-item'>
                    <a class='nav-link' href='cart.php'>Cart</a>
                </li>";
               echo "<li class='nav-item'>
                    <a class='nav-link' href='userprofile.php'>Profile</a>
                </li>";
               
           }elseif ($_SESSION['login'] == "admin"){
               $_SESSION['id'];
        $id = $_SESSION['id'];
               echo "<li class='nav-item active'>";
               echo "<a class='nav-link' href='AdminMain.php'>Admin Menu <span class='sr-only'>(current)</span></a>";
               echo "</li>";
               echo "<li class='nav-item'>
                    <a class='nav-link' href='logout.php'>Logout</a>
                </li>";
           }else{
               echo "<li class='nav-item'>
               <a class='nav-link' href='home.php'>Home</a>
                </li>";
                echo "<li class='nav-item'>
                    <a class='nav-link' href='login.php'>Login</a>
                </li>";
               echo "<li class='nav-item'>
                    <a class='nav-link' href='aboutus.php'>About Us</a>
                </li>";
                          }
        
                
   echo '</ul>';
    echo '<form class="form-inline my-2 my-lg-0" action="search.php" method="post">';
     echo  '<input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">';
      echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>';
    echo '</form>';
echo '</nav>';
          ?>


	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
   
    