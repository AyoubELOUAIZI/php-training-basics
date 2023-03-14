<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./matiereinfo.css">
</head>

<body>


    <?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the values entered by the user
    $code = $_POST['code'];
    $matiere = $_POST['matiere'];
    $coefficient = $_POST['coefficient'];
    $censeignant = $_POST['censeignant'];

    // Connect to the database using PDO
    $dsn = 'mysql:host=localhost;dbname=est_students';
    $username = 'root';
    $password = 'pass';

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to insert the data
        $sql = "INSERT INTO Matiere (num_mat, nom_mat, coef, _num_ens)
                VALUES (:code, :matiere, :coefficient, :censeignant)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':matiere', $matiere);
        $stmt->bindParam(':coefficient', $coefficient);
        $stmt->bindParam(':censeignant', $censeignant);

        // Execute the SQL statement and check if it was successful
        $stmt->execute();
        echo "Data inserted successfully";

    } catch(PDOException $e) {
        echo "Error inserting data: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>


    <form method="post" action="">
        <fieldset>
            <legend>Matiere Information</legend>
            <label for=" code">Code:</label>
            <input type="text" name="code" id="code"><br><br>

            <label for="matiere">Nom Matière:</label>
            <input type="text" name="matiere" id="matiere"><br><br>

            <label for="coefficient">Coefficient:</label>
            <input type="number" min="1" max="5" name="coefficient" id="coefficient"><br><br>

            <label for="censeignant">Censeignant:</label>
            <input type="number" min="1" max="5" name="censeignant" id="censeignant">
            <br><br>
            <button type="submit" name="submit" value="insert">Insertion</button>

            <button type="reset">Effacer</button>
            <button type="submit" name="submit1" value="insert">Aficher la Table matier</button>

        </fieldset>

    </form>


    <form method="post" action="">
        <fieldset>
            <legend>recherche Matiere</legend>

            <label for="matiere">Nom Matière:</label>
            <input type="text" name="matiere" id="matiere"><br><br>

            <button type="reset">Effacer</button>
            <button type="submit" name="submit" value="insert">chercher les matieres</button>

        </fieldset>

    </form>

    <form action="quistion3.php">
        <br><br>
        <button type="submit" name="submit">go to table -></button>
        <br><br>
    </form>



    <?php
   
  if (isset($_POST['submit1'])) { 
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

    // Retrieve data from the "matiere" table
    $sql = "SELECT * FROM matiere";
    $stmt = $pdo->query($sql);

    // Print out the data
    ?>
    <table border='1'>
        <thead>
            <tr>
                <th>Numéro matière</th>
                <th>Nom matière</th>
                <th>Coef</th>
                <th>Numéro enseignant</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch()) { ?>
            <tr>
                <td><?php echo $row['num_mat']; ?></td>
                <td><?php echo $row['nom_mat']; ?></td>
                <td><?php echo $row['coef']; ?></td>
                <td><?php echo $row['_num_ens']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
  }
?>

</body>

</html>