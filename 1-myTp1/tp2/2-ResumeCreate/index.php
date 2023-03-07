<?php
if(isset($_COOKIE['loggedin'])) {
    header("location: myresume.php");
    exit;
} else {
    header("location: connection.php");
    exit;
}
?>