<?php 
session_start();

if ( !isset($_SESSION["LoggedInUserEmail"]) ) {
   
    header("Location: ./Login/Login.php",true,301); //this is to redirect to the given URL
    
} else {
  
    header("Location: ./Home/Home.php", true, 301);
}


?>