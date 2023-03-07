<?php
if(isset($_SESSION['login'])){
header('Location: myresume.php');
exit;
}else {
    header("location: connection.php");
    exit;
}
?>