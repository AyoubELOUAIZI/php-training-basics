<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];

    // Check if user exists in etatcivil.txt file
    $filename = "etatcivil.txt";
    $handle = fopen($filename, "r");

    while (($line = fgets($handle)) !== false) {
        $fields = explode(",", $line);

        if ($fields[0] == $lastname && $fields[1] == $firstname) {
            $_SESSION['loggedin'] = true;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['firstname'] = $firstname;
            header("Location: formation.php");
            exit;
        }
    }

    $_SESSION['message'] = "Invalid login";
    header("Location: etatcivil.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Etat Civil</title>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div style='color:red;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="">
        <h2>Etat Civil</h2>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname"><br><br>

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>