<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

// Check if the form was submitted
if (isset($_POST['submit'])) {

    // Retrieve the form data using the $_POST superglobal
    $code = $_POST['code'];
    $matiere = $_POST['matiere'];
    $coefficient = $_POST['coefficient'];
    $censeignant = $_POST['censeignant'];

    // Connect to the database using PDO
    $host = 'localhost';
    $db   = 'my_database';
    $user = 'my_username';
    $pass = 'my_password';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    // Prepare the SQL statement for inserting the data into the 'Matiere' table
    $sql = "INSERT INTO Matiere (num_mat, nom_mat, coef, _num_ens) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Execute the prepared statement with the form data as parameters
    $stmt->execute([$code, $matiere, $coefficient, $censeignant]);

    // Redirect the user to a confirmation page
    header("Location: confirmation.php");
    exit
?>










</body>

</html>