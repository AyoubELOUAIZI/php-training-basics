<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="matiereinfo.php">
        <button type="submit" name="submit">Go Matiere form</button>
        <br><br>
    </form>

</body>

</html>
<?php

// Connect to the database
$host = 'localhost';
$dbname = 'est_students';
$username = 'root';
$password = 'pass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

// Retrieve data from the "Etudiant" table
$sql = "SELECT * FROM Etudiant";
$stmt = $pdo->query($sql);

// Print out the data
// while ($row = $stmt->fetch()) {
// echo $row['nom'] . "\t" . $row['prenom'] . "\t" . $row['cne'] . "<br>";
    
// }

echo "<table  border='1'>";
echo "<tr><th>CNE</th><th>Nom</th><th>Prénom</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['cne'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "</tr>";
}
echo "</table>";





?>