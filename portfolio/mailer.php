<?php

  $sName = $_REQUEST["senderName"];
  $email = $_REQUEST["sender"];
  $subject = $_REQUEST["subject"];
  $message = $_REQUEST["message"];

  $message = "Name: " . $sName . "\r" . "Message: " . $message;

  mail( "wmidiamix@gmail.com", $subject, $message, "From: $email" );

?>

