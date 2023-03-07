<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $responsibilities = $_POST['responsibilities'];

    $data = array(
        'company_name' => $company_name,
        'position' => $position,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'responsibilities' => $responsibilities,
    );

    $json_data = json_encode($data);

    $file = fopen('experience.txt', 'a');
    fwrite($file, $json_data . "\n");
    fclose($file);

    $_SESSION['message'] = 'Experience added successfully!';
    	header('Location: hobbies.php');
    exit;
}

$experiences = array();
if (file_exists('experience.txt')) {
    $file = fopen('experience.txt', 'r');
    while (($json_data = fgets($file)) !== false) {
        $experience = json_decode($json_data, true);
        $experiences[] = $experience;
    }
    fclose($file);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Work Experience</title>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div style='color:red;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2>Work Experience</h2>
        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name"
            value="<?php echo isset($_POST['company_name']) ? $_POST['company_name'] : ''; ?>"><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position"
            value="<?php echo isset($_POST['position']) ? $_POST['position'] : ''; ?>"><br><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date"
            value="<?php echo isset($_POST['start_date']) ? $_POST['start_date'] : ''; ?>"><br><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date"
            value="<?php echo isset($_POST['end_date']) ? $_POST['end_date'] : ''; ?>"><br><br>

        <textarea id="responsibilities" name="responsibilities" rows="4"
            cols="50"><?php echo isset($_POST['responsibilities']) ? $_POST['responsibilities'] : 'Responsibilities...'; ?></textarea><br><br>

        <input type="submit" value="Submit">

    </form>

    <form method="" action="hobbies.php">
        <input type="submit" value="just go to Next ->">
    </form>
    <form method="" action="formation.php">
        <input type="submit" value="<-just go to back">
    </form>

    <?php if (!empty($experiences)) { ?>
    <h2>Previous Experiences</h2>
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
</body>

</html>