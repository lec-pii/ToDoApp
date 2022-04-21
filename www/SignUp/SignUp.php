<?php

if(isset($_POST['Email'])){
    //submission has happened

    if($_POST['Password'] == $_POST['ConfirmPassword']){
        
        
        $conn = new mysqli("localhost", "root", "", "todoApp");
        if ($conn->connect_error) {
            die("Connection Failed" . $conn->connect_error);
        }
        
        $sql = "INSERT INTO users (email, fname, lname, password) values(
            '".$_POST["Email"]."', 
            '".$_POST["FName"]."', 
            '".$_POST["LName"]."', 
            '".$_POST["Password"]."'
            ) "; 
            // INSERT INTO users (email, fname, lname, password) VALUES(
            //        'codejunkie@todo.com', 
            //        'Freddy', 
            //        'Fredd', 
            //        'pass'
            //    );
        
            if ($conn->query($sql) === TRUE) {
            ?>
              <script>
                  alert("New User created successfully");
                  console.log("New User created successfully");
              </script>
              <?php
              header("Location: ../Login/Login.php",true,301);
           
          } else {
              ?>
              <script>
                  alert("User Already exists");
                  console.log("Error: ");
              </script>
              <?php
            
          }

          $conn->close();
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="SignUp.php" method="POST">
        <div class="container">
            <div class="field">
                <label>Email</label>
                <input type="email" placeholder="codejunkie@todo.com" name="Email" required>
            </div>
            <div class="field">
                <label>First Name</label>
                <input type="text" placeholder="Freddy" name="FName" required>
            </div>
            <div class="field">
                <label>Last Name</label>
                <input type="text" placeholder="Fredd" name="LName" required>
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" placeholder="*****" name="Password" required>
            </div>
            <div class="field">
                <label>Confirm Password</label>
                <input type="password" placeholder="*****" name="ConfirmPassword" required>
            </div>
            <div class="field">
                <input type="submit" value="SignUp">
            </div>
        </div>
    </form>
</body>

</html>