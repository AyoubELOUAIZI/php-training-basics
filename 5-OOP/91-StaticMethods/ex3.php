<?php
class greeting {
  public static function welcome() {
    echo "Hello World! this example using the key word self";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>