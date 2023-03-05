<?php
echo readfile("webdictionary.txt");
echo"<br>";
?>
<?php
echo"<br>";
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

</html>
<?php
// r	Open a file for read only.
// w	Open a file for write only
// a	Open a file for write only. 
// x	Creates a new file for write only.
// r+	Open a file for read/write.
// w+	Open a file for read/write.
// a+	Open a file for read/write.
// x+	Creates a new file for read/write.

?>