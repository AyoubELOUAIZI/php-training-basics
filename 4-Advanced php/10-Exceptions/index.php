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
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
  
} catch(Exception $ex) {
  $code = $ex->getCode();
  echo "<br>";
  $message = $ex->getMessage();
  echo "<br>";
  $file = $ex->getFile();
  echo "<br>";
  $line = $ex->getLine();
  echo "<br>";
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}finally {
  echo "Process complete.";
}

?>
</body>

</html>