<?php

$name = "Tsebiso";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Section 5</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Vel laborum quam corrupti. Repudiandae iure, quaerat eligendi <br>

        My name is <?php echo $name ?> and I live at Masowe.<br> 
        <hr>
        <table border="2" cellpadding="10px">
          <tr>
          <?php 
            for ($i=0; $i < 10 ; $i++) { 
                
                echo "<td> $i </td>";

            }
        ?>
          </tr>  
        </table>
        
        <hr>

        perferendis commodi reiciendis voluptas suscipit <br>
        sunt labore soluta dolores. Tempore quibusdam quos dolorum laborum!
    </p>
</body>
</html>