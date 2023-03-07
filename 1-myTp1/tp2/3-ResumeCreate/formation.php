<?php
session_start();
// initialize variables
$degree = "";
$major = "";
$university = "";
$graduation_date = "";

   // read the data from formation.txt file
    $filename = "formation.txt";
    $file = fopen($filename, "r");
    // read file line by line
while (!feof($file)) {
    $line = fgets($file);

    // extract first name
    if (strpos($line, "Degree:") !== false) {
        $degree = trim(str_replace("Degree:", "", $line));
    }

    // extract last name
    if (strpos($line, "Major:") !== false) {
        $major = trim(str_replace("Major:", "", $line));
    }
    
    // extract last email
    if (strpos($line, "University:") !== false) {
        $university = trim(str_replace("University:", "", $line));
    }
    // extract last email
    if (strpos($line, "Graduationdate:") !== false) {
        $graduation_date = trim(str_replace("Graduationdate:", "", $line));
    }
}

fclose($file);

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get form data and save to session
	$_SESSION['degree'] = $_POST['degree'];
	$_SESSION['major'] = $_POST['major'];
	$_SESSION['university'] = $_POST['university'];
	$_SESSION['graduation_date'] = $_POST['graduation_date'];
	
	// Save form data to text file
	$data = "Degree: " . $_SESSION['degree'] . "\n";
	$data .= "Major: " . $_SESSION['major'] . "\n";
	$data .= "University: " . $_SESSION['university'] . "\n";
	$data .= "Graduationdate: " . $_SESSION['graduation_date'] . "\n";
	file_put_contents('formation.txt', $data);
	
	// Redirect to next page
	header('Location: experience.php');
	exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Education</title>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div style='color:red;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="">
        <h2>Education</h2>
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree" value="<?php echo $degree?>"><br><br>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major" value="<?php echo $major?>"><br><br>

        <label for="university">University:</label>
        <input type="text" id="university" name="university" value="<?php echo $university?>"><br><br>

        <label for="graduation_date">Graduation Date:</label>
        <input type="date" id="graduation_date" name="graduation_date" value="<?php echo $graduation_date?>"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>