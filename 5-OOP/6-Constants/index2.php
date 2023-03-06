<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting channel do not forget to visite againe";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>