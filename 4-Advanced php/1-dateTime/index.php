<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
//to add Updated copyright
echo"© 2010-". date("Y"). "<br>";
?>

<?php
echo "The time in the server is " . date("h:i:sa"). "<br>";
date_default_timezone_set("America/New_York");
echo "The time in new york is " . date("h:i:sa"). "<br>";
?>

<?php
echo"<hr>";
echo"mktime(hour, minute, second, month, day, year)<br>";
//function returns the Unix timestamp for a date
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
echo"<hr>";
echo"strtotime(time, now) <br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
?>

<?php
echo"PHP is quite clever about converting a string to a date, so you can put in various values: <br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";


$d=strtotime("tomorrow +3 days");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>


<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
 $startdate = strtotime("+1 week", $startdate);
}
?>

<?php
echo"<hr>";
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>