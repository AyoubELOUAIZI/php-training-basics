<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Work Experience</title>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<div style='color:red;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="experience_post.php">
        <h2>Work Experience</h2>
        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name"><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position"><br><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date"><br><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date"><br><br>

        <textarea id="responsibilities" name="responsibilities" rows="4"
            cols="50">Responsibilities...</textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>