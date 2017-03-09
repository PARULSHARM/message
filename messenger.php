<?php
ini_set('display_errors', 'On');
include 'connection.php';
error_reporting(E_ALL);
  include_once 'message_manager_interface.php';
  class messenger implements Message_Manager_Interface{
    public function execute(){
    print_r('    Hi!!');
    }
  }
?>
