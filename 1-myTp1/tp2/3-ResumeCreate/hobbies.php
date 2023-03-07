<?php
session_start();

// initialize variables
$hobby1 = "";
$hobby2 = "";
$hobby3 = "";

   // read the data from etatcivil.txt file
    $filename = "hobbies.txt";
    $file = fopen($filename, "r");
    // read file line by line
 while (!feof($file)) {
    $line = fgets($file);

    // extract first name
    if (strpos($line, "Hobby1: ") !== false) {
        $hobby1 = trim(str_replace("Hobby1:", "", $line));
    }

    // extract last name
    if (strpos($line, "Hobby2:") !== false) {
        $hobby2 = trim(str_replace("Hobby2:", "", $line));
    }
    
    // extract last email
    if (strpos($line, "Hobby3:") !== false) {
        $hobby3 = trim(str_replace("Hobby3:", "", $line));
    }
}

fclose($file);

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get form data and save to session
	$_SESSION['hobby1'] = $_POST['hobby1'];
	$_SESSION['hobby2'] = $_POST['hobby2'];
	$_SESSION['hobby3'] = $_POST['hobby3'];
	
	// Save form data to text file
	$data = "Hobby1: " . $_SESSION['hobby1'] . "\n";
	$data .= "Hobby2: " . $_SESSION['hobby2'] . "\n";
	$data .= "Hobby3: " . $_SESSION['hobby3'] . "\n";
	file_put_contents('hobbies.txt', $data);
	
	// Redirect to next page
	header('Location: myresume.php');  //back to dashbord
	exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hobbies</title>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div style='color:red;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="">
        <h2>Hobbies</h2>
        <label for="hobby1">Hobby 1:</label>
        <input type="text" id="hobby1" name="hobby1" value="<?php echo $hobby1?>"><br><br>

        <label for="hobby2">Hobby 2:</label>
        <input type="text" id="hobby2" name="hobby2" value="<?php echo $hobby2?>"><br><br>

        <label for="hobby3">Hobby 3:</label>
        <input type="text" id="hobby3" name="hobby3" value="<?php echo $hobby3?>"><br><br>

        <input type="submit" value="Submit">
    </form>
    <form method="" action="myresume.php">
        <input type="submit" value="just go to Next ->">
    </form>
    <form method="" action="experience.php">
        <input type="submit" value="<-just go to back ">
    </form>
</body>

</html>