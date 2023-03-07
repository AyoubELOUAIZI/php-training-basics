<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Education</title>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div style='color:red;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="">
        <h2>Education</h2>
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree"><br><br>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major"><br><br>

        <label for="university">University:</label>
        <input type="text" id="university" name="university"><br><br>

        <label for="graduation_date">Graduation Date:</label>
        <input type="date" id="graduation_date" name="graduation_date"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>