<?php

define('SERVER', 'localhost');
define('DBNAME', 'todoApp');
define('USERNAME', 'root');
define('PASSWORD', '');

$conn;

function ConnectDB()
{
    global $conn;
    $conn = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);

    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }

?>
    <script>
        console.log("DB Connection Successful");
    </script>
    <?php
    // CreaateDBTables();
}

function CreaateDBTables()
{
    global $conn;
    $sql = "CREATE DATABASE IF NOT EXISTS " . DBNAME;
    if ($conn->query($sql) === TRUE) {
    ?>
        <script>
            console.log("Todo DB created Successfully");
        </script>
        <?php
        $sql = "CREATE TABLE " . DBNAME . ".users (
            email VARCHAR(30)  PRIMARY KEY,
            fname VARCHAR(30) NOT NULL,
            lname VARCHAR(30) NOT NULL,
            password VARCHAR(100) 
         ) ";
        if ($conn->query($sql) === TRUE) {
        ?>
            <script>
                console.log("Table users created successfully");
            </script>
            <?php

            $sql = "CREATE TABLE " . DBNAME . ".todos (
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(30) NOT NULL,
                details TEXT,
             ) ";
            if ($conn->query($sql) === TRUE) {
            ?>
                <script>
                    console.log("Table todo created successfully");
                </script>
        <?php

            } else {
                echo "Error creating table: " . $conn->error;
            }
        } else {
            echo "Error creating table: " . $conn->error;
        }
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

function getTodos()
{
}

function createUser($email, $fname, $lname, $password)
{
    global $conn;
    
    $sql_stmt = "INSERT INTO users (email, fname, lname, password) values('$email', '$fname', '$lname', '$password') ";
    if ($conn->query($sql_stmt) === TRUE) {
        ?>
        <script>
            console.log("New User Added Successful");
        </script>
<?php
    } else {
        echo "Error: " . $sql_stmt . "<br>" . $conn->error;
    }
}

function getUser()
{
}




?>