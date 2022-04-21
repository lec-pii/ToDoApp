<?php 

$username = "tanki@gmail.com";
$password = "pass";

if( isset($_GET["Email"]) && isset($_GET["Password"]) ){
    //Execute this only if the form has been submitted
    if($_GET["Email"] == $username){
        if($_GET["Password"] == trim($password) ){
            header("Location: ./Home/Home.php",true,301);
        }
        else{
            // echo $_GET["Password"];
            // echo " $password";
            ?> <script> alert('Wrong password'); </script> <?php
        }
    }else{
        echo " 6 ";
        echo " <script> alert('Wrong Email'); <script>  ";
    }
}
echo " joh ";
?>