<?php
session_start();
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

    <?php
    Echo "session variables that were set on previous page <br>";
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>
    <br>

    <hr>

    <?php
        // ---------------------------------------------------//
        // Another way to show all the session variable values for a user 
        // session is to run the following code:
        print_r($_SESSION);
        ?>


    <hr><br>
    <?php
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    ?>




    <?php
        // remove all session variables
        // session_unset();

        // // destroy the session
        // session_destroy();
        ?>


</body>

</html>