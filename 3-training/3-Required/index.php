<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

     // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (!empty($_POST["website"])) {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (!empty($_POST["comment"])) {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}



?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span class="error">Name: * <?php echo $nameErr;?></span>
        <input type="text" name="name" value="<?php echo $name;?>">
        <br><br>

        <span class="error">E-mail: * <?php echo $emailErr;?></span>
        <input type="text" name="email" value="<?php echo $email;?>">
        <br><br>

        <span class="error">Website: <?php echo $websiteErr;?></span>
        <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>

        <span class="error"> Gender: * <?php echo $genderErr;?></span>
        <div class="radio">
            <input id="female" type="radio" name="gender" value="female" <?php if($gender=="female") echo "checked";?>>
            <label for="female">Female</label>
            <input id="male" type="radio" name="gender" value="male" <?php if($gender=="male") echo "checked";?>>
            <label for="male">Male</label>
            <input id="other" type="radio" name="gender" value="other" <?php if($gender=="other") echo "checked";?>>
            <label for="other">Other</label>
        </div>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    }
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


</body>

</html>