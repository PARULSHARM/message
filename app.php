<?php
include_once 'mailer.php';
include_once 'messenger.php';
include_once 'message_manager_interface.php';
include_once 'notifier.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);

  $mailer = new mailer();
  $notifier = new notifier($mailer);
  $notifier->send();
  $messenger =new messenger();
  $notifier = new notifier($messenger);
  $notifier->send();
?>
