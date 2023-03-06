<!-- A class can have both static and non-static properties.
A static property can be accessed from a method in the same
class using the self keyword and double colon (::): -->


<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();
?>