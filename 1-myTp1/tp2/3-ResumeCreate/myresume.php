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


<?php


 if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    if(isset($_POST['Personal_Data']) ) {
    $personalDetails =array();
if (file_exists('etatcivil.txt')) {
    $file = fopen('etatcivil.txt', 'r');
    while (($personaldetail = fgets($file)) !== false) {
        $personalDetails[] = $personaldetail;
    }
    fclose($file);
}
}
 }

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    if(isset($_POST['Education'])) {
    $personalDetails =array();
if (file_exists('formation.txt')) {
    $file = fopen('formation.txt', 'r');
    while (($personaldetail = fgets($file)) !== false) {
        $personalDetails[] = $personaldetail;
    }
    fclose($file);
}
}
}
//---------------------------------------------------------//

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    if(isset($_POST['Experience'])) {
$experiences = array();
if (file_exists('experience.txt')) {
    $file = fopen('experience.txt', 'r');
    while (($json_data = fgets($file)) !== false) {
        $experience = json_decode($json_data, true);
        $experiences[] = $experience;
    }
    fclose($file);
}
}
}


 if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    if(isset($_POST['Hobbies'])) {
    $personalDetails =array();
if (file_exists('hobbies.txt')) {
    $file = fopen('hobbies.txt', 'r');
    while (($personaldetail = fgets($file)) !== false) {
        $personalDetails[] = $personaldetail;
    }
    fclose($file);
}
}
 }


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
            <p id="date">Date/hour: <?php echo date('d/m/Y H:i:s'); ?>
            </p>
            <p id="date">Hi: <?php echo $user; ?></p>
        </div>
        <h2>My Resume</h2>
        <p>Number of visits: <?php echo $visits; ?></p>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <form method="post" action="">
                        <input type="hidden" name="Personal Data" value="Personal Data">
                        <input type="submit" value="Personal Data">
                    </form>
                </li>
                <li>
                    <form method="post" action="">
                        <input type="hidden" name="Education" value="Education">
                        <input type="submit" value="Education">
                    </form>

                </li>
                <li>
                    <form method="post" action="">
                        <input type="hidden" name="Experience" value="Experience">
                        <input type="submit" value="Experience">
                    </form>

                </li>
                <li>
                    <form method="post" action="">
                        <input type="hidden" name="Hobbies" value="Hobbies">
                        <input type="submit" value="Hobbies">
                    </form>

                </li>






            </ul>
        </nav>
        <div class="cvcontainer">
            <div class="cv">
                <!-- <h1>cv</h1> -->


                <!-- <h2>Details</h2> -->
                <?php if (!empty($personalDetails)) { ?>
                <ul>
                    <?php foreach ($personalDetails as $personalDetail) { ?>
                    <li>
                        <?php echo $personalDetail; ?>

                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
                <!--  -->
                <!-- Experienes -->
                <?php if (!empty($experiences)) { ?>
                <!-- <h2>Experiences</h2> -->
                <ul>
                    <?php foreach ($experiences as $experience) { ?>
                    <li>
                        <strong><?php echo $experience['company_name']; ?></strong> -
                        <?php echo $experience['position']; ?> -
                        <?php echo $experience['start_date']; ?> to <?php echo $experience['end_date']; ?><br>
                        <?php echo $experience['responsibilities']; ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>

                <!--  -->
            </div>
            <div class="logout">
                <form method="post" action="connection.php">
                    <input type="hidden" name="logout_token" value="12345">
                    <input type="submit" value="Logout">
                </form>
            </div>
        </div>
    </div>

</body>

</html>