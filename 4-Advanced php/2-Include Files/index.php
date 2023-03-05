<!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="menu" style="background-color:yellow;padding:15px;">
        <?php include 'menu.php';?>
    </div>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatibus maiores nemo cupiditate
        <br>
        beatae, repudiandae aut excepturi optio enim eum assumenda amet. Beatae, ducimus magnam! Inventore praesentium
        commodi perspiciatis consequuntur.
    </p>
    <p>Some more text.</p>

    <?php include 'vars.php';
    echo "I have a $color $car.";
    ?>

    <br>
    <hr>
    <?php include 'noFileExists.php';
    echo "I have a $color $car.";
    ?>
    <hr>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="footer" style="background-color:yellow;padding:15px;buttom:0px;">
        <?php include 'footer.php';?>
    </div>
</body>

</html>