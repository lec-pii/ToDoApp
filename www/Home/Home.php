<?php
session_start();

function logout()
{
    session_destroy();
    header("Location: ../index.php", true, 301);
}

if (isset($_GET["logout"]) && $_GET["logout"] == true) {
    logout();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    <link rel="stylesheet" href="./HomeStyle.css">
</head>

<body>
    <div class="head">
        <div id="open-Modal">
            <img class="icon add" alt="">
            <span>New Task</span>
        </div>
        <h1>To Do App</h1>
        <span class="username">
            <?php
            echo $_SESSION["username"];
            ?>

            <img class="icon logout" onclick="location.replace('./Home.php?logout=true');" alt="logout" />
        </span>
    </div>
    <div class="contents">
        <div class="todos lists">
            <div class="todo">
                <div class="todo-info">
                    <div>
                        <div class="title">
                            <span id="">1. </span>
                            <span class="text"> HELLO </span>
                        </div>
                        <input type="button" value="50%">
                    </div>
                    <div class="details">
                        hwl
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Saepe nobis placeat adipisci ex perspiciatis quam sint eligendi!
                    </div>
                </div>
                <span class="time">
                    13:30
                </span>
            </div>



        </div>
        <div class="done lists">
            <div class="todo">
                <div class="todo-info">
                    <div>
                        <div class="title">
                            <span id="">1. </span>
                            <span class="text"> HELLO </span>
                        </div>

                        <input type="button" style="background-color: greenyellow;" value="100%">
                    </div>
                    <div class="details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Saepe nobis placeat adipisci ex perspiciatis quam sint eligendi!
                    </div>
                </div>
                <span class="time">
                    13:30
                </span>
            </div>
        </div>

    </div>
    <div class="modal-container">
        <div id="modal">
            <input type="text" class="c-title">
            <textarea class="c-datails"></textarea>
            <input id="close-Modal" type="button" value="ADD">
        </div>
    </div>

</body>
<script src="./script.js"></script>

</html>