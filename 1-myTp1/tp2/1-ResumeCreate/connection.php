<?php
session_start();
if(isset($_SESSION['lastname']) && isset($_SESSION['firstname'])){
    header('Location: myresume.php');
    exit;
}

if(isset($_POST['submit'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    // read the data from etatcivil.txt file
    $filename = "Etatcivil.txt";
    $file = fopen($filename, "r");
    $data = fgets($file);
    fclose($file);

    // check if the entered lastname and firstname match the data in the file
    if(trim($data) == $lastname.' '.$firstname.' '.$password){
        $_SESSION['lastname'] = $lastname;
        $_SESSION['firstname'] = $firstname;
        header('Location: myresume.php');
        exit;
    } else {
        $error_message = "Invalid login credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div style="width: 50%; margin: 50px auto;">
        <h2>Login Page</h2>
        <?php if(isset($error_message)) { ?>
        <div style="color: red;"><?php echo $error_message; ?></div>
        <?php } ?>
        <form method="post" action="">
            <div style="margin-bottom: 10px;">
                <label>Lastname:</label>
                <input type="text" name="lastname" required>
            </div>
            <div style="margin-bottom: 10px;">
                <label>Firstname:</label>
                <input type="text" name="firstname" required>
            </div>
            <div style="margin-bottom: 10px;">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>

</body>

</html>