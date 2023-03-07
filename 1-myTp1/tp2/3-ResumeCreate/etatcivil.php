<?php
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get form data and save to session
	$_SESSION['firstname'] = $_POST['firstname'];
	$_SESSION['lastname'] = $_POST['lastname'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['adress'] = $_POST['adress'];
	
	// Save form data to text file
	$data = "First Name: " . $_SESSION['firstname'] . "\n";
	$data .= "Last Name: " . $_SESSION['lastname'] . "\n";
	$data .= "Email: " . $_SESSION['email'] . "\n";
	$data .= "Phone: " . $_SESSION['phone'] . "\n";
	$data .= "password: " . $_SESSION['password'] . "\n";
	$data .= "adress: " . $_SESSION['adress'] . "\n";
	file_put_contents('etatcivil.txt', $data);
	
	// Redirect to next page
	header('Location: formation.php');
	exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Resume Builder - Personal Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    h2 {
        margin-top: 50px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }

    input[type=text],
    input[type=email],
    input[type=tel] {
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 300px;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin: 10px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type=submit]:hover {
        background-color: #3e8e41;
    }
    </style>
</head>

<body>

    <div style="text-align: center;">
        <h1>Resume Builder</h1>
        <h2>Personal Data</h2>
    </div>

    <form method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="adress">Adress:</label>
        <input type="text" id="adress" name="adress" required>

        <input type="submit" value="Next">
    </form>

</body>

</html>