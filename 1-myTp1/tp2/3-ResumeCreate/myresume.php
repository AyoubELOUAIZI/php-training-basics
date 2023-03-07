<?php
 session_start();

if (isset($_COOKIE['visits'])) {
  $visits = $_COOKIE['visits'] + 1;
} else {
  $visits = 1;
}

if(isset($_SESSION['login'])){
$user=$_SESSION['login'];
}else {
    header("location: connection.php");
    exit;
}

setcookie('visits', $visits, time() + 3600 * 24);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv generater</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header>
        <div>
            <p id="date">Date/hour: <?php echo date('d/m/Y H:i:s'); ?></p>
            <p id="date">Hi: <?php echo $user; ?></p>
        </div>
        <h2>My Resume</h2>
        <p>Number of visits: <?php echo $visits; ?></p>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="etatcivil.php">Personal Data</a></li>
                <li><a href="formation.php">Education</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="hobbies.php">Hobbies</a></li>
            </ul>
        </nav>
        <div class="cvcontainer">
            <div class="cv">
                <h1>cv</h1>
            </div>
            <form method="post" action="connection.php">
                <input type="hidden" name="logout_token" value="12345">
                <input type="submit" value="Logout">
            </form>
        </div>
    </div>

</body>

</html>