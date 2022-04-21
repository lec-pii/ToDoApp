<?php


if (isset($_POST["Email"]) && isset($_POST["Password"])) {
    //Execute this only if the form has been submitted
    $conn = new mysqli("localhost", "root", "", "todoApp");
    $sql = "SELECT * FROM users WHERE email = '".$_POST["Email"]."' "; // SELECT * FROM users WHERE email = 'fred@todo.com';
    $user = $conn->query($sql);
    if($user->num_rows > 0){

        while($row = $user->fetch_assoc()){
            
            if ($row["password"] == trim($_POST["Password"])) {
        
                    session_start();
                    $_SESSION["LoggedInUserEmail"] = $row['email'];
                    $_SESSION["username"] = $row['fname'];
                    
                    header("Location: ../Home/Home.php",true,301);
                } else { ?>
                    <script>
                        alert('Wrong password');
                    </script>
                    <?php
                }
        }
    }else{
        ?>
            <script>
                alert('User Does Not Exist');
            </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>


<body>
    <form action="Login.php" method="POST">
        <div class="container">
            <div class="field">
                <label>Email</label>
                <input type="email" placeholder="E-Mail" name="Email" required>
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" placeholder="Password" name="Password">
            </div>
            <div class="field">
                <input type="submit" style="margin-bottom: 15px;" value="Login">
                <a href="../SignUp/SignUp.php"><input type="button" value="SignUp"></a>
            </div>
        </div>
    </form>
</body>

</html>