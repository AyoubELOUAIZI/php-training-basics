<?php
session_start();

if (!isset($_SESSION['civil_status']) || !isset($_SESSION['degree']) || !isset($_SESSION['company']) || !isset($_SESSION['hobbies'])) {
  header('Location: etatcivil.php');
  exit;
}

if (isset($_COOKIE['visits'])) {
  $visits = $_COOKIE['visits'] + 1;
} else {
  $visits = 1;
}

setcookie('visits', $visits, time() + 3600 * 24);

$civil_status = $_SESSION['civil_status'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$degree = $_SESSION['degree'];
$school = $_SESSION['school'];
$company = $_SESSION['company'];
$position = $_SESSION['position'];
$hobbies = $_SESSION['hobbies'];
?>

<h2>My Resume</h2>

<h3>Personal Data</h3>
<p>Civil status: <?php echo $civil_status; ?></p>
<p>First name: <?php echo $first_name; ?></p>
<p>Last name: <?php echo $last_name; ?></p>

<h3>Education</h3>
<p>Degree: <?php echo $degree; ?></p>
<p>School: <?php echo $school; ?></p>

<h3>Experience</h3>
<p>Company: <?php echo $company; ?></p>
<p>Position: <?php echo $position; ?></p>

<h3>Hobbies</h3>
<p><?php echo nl2br($hobbies); ?></p>

<p>Date/hour: <?php echo date('d/m/Y H:i:s'); ?></p>
<p>Number of visits: <?php echo $visits; ?></p>

<form method="post" action="connection.php">
    <input type="submit" value="Logout">
</form>