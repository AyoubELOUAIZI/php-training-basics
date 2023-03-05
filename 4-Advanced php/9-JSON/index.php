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
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?><br>
    <hr>
    <?php
    //This example shows how to encode an indexed array into a JSON array:
    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
    ?>
    <br>
    <hr>
    <?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?><br>
    <hr>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    var_dump(json_decode($jsonobj, true));
    ?>

    <hr>
    <?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter."<br>";
echo $obj->Ben."<br>";
echo $obj->Joe."<br>";
?>
    <hr>
    <?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"]."<br>";
echo $arr["Ben"]."<br>";
echo $arr["Joe"]."<br>";
?><br>

    <hr>

    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    $obj = json_decode($jsonobj);
    foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
   }
?>


</body>

</html>