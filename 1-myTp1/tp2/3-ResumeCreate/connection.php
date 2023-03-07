<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout_token"]) && $_POST["logout_token"] == "12345") {
    // Logout code goes here
    session_unset();
    session_destroy();
}

if(isset($_POST['submit']) && isset($_POST["login_token"]) &&  $_POST["login_token"] == "myloginToken"){
    $login = $_POST['login'];
    $password = $_POST['password'];

    // read the data from etatcivil.txt file
    $filename = "etatcivil.txt";
    $file = fopen($filename, "r");
    // read file line by line
while (!feof($file)) {
    $line = fgets($file);

    // extract first name
    if (strpos($line, "First Name:") !== false) {
        $first_name = trim(str_replace("First Name:", "", $line));
    }

    // extract last name
    if (strpos($line, "Last Name:") !== false) {
        $last_name = trim(str_replace("Last Name:", "", $line));
    }

    // extract fpassword
    if (strpos($line, "password:") !== false) {
        $fpassword = trim(str_replace("password:", "", $line));
    }

}

fclose($file);

    // check if the entered and login match the data in the file
    if(trim($first_name.$last_name." ".$fpassword) == $login.' '.$password){
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $fpassword;
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
    <div class="connection">
        <div style=" width: 50%; margin: 50px auto;">
            <h2>Login Page</h2>
            <?php if(isset($error_message)) { ?>
            <div style="color: red;"><?php echo $error_message; ?></div>
            <?php } ?>
            <form method="post" action="">
                <div style="margin-bottom: 10px;">
                    <label>Login:</label>
                    <input type="text" name="login" required>
                </div>
                <div style="margin-bottom: 10px;">
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <input type="hidden" name="login_token" value="myloginToken">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>

</body>

</html>