<?php
session_start();
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
    <form method="post" action="hobbies_post.php">
        <h2>Hobbies</h2>
        <label for="hobby1">Hobby 1:</label>
        <input type="text" id="hobby1" name="hobby1"><br><br>

        <label for="hobby2">Hobby 2:</label>
        <input type="text" id="hobby2" name="hobby2"><br><br>

        <label for="hobby3">Hobby 3:</label>
        <input type="text" id="hobby3" name="hobby3"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>