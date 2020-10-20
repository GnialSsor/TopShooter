<?php
session_start();
session_destroy();
header('Location: home.php');
/*destroys the session logging the user out*/ 
exit;
?>