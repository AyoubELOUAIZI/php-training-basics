<?php
// session_start();
// if(isset($_SESSION['login'])){
//     header('Location: myresume.php');
//     exit;
// }
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout_token"]) && $_POST["logout_token"] == "12345") {
    // Logout code goes here
    setcookie("loggedin", "", time()-3600);
}


if(isset($_POST['submit']) && isset($_POST["login_token"]) &&  $_POST["login_token"] == "myloginToken"){
    $login = $_POST['login'];
    $password = $_POST['password'];

    // read the data from etatcivil.txt file
    $filename = "etatcivil.txt";
    $file = fopen($filename, "r");
    $data = fgets($file);
    fclose($file);

    // check if the entered and login match the data in the file
    if(trim($data) == $login.' '.$password){
       $_COOKIE['loggedin'] = $login;
       setcookie('loggedin', $login, time() + 3600*2);

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