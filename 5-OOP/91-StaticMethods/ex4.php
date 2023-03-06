<?php


// Static methods can also be called from methods in other classes. 
// To do this, the static method should be public:


class greeting {
  public static function welcome() {
    echo "Hello World!<br><hr>";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

$obj=new SomeOtherClass();
$obj->message();

// --------------------------------------------------------------------------//

class domain {
  protected static function getWebsiteName() {
    return "ayoubelouaizi.live";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;



?>