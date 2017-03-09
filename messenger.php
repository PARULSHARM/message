<?php
  ini_set('display_errors', 'On');

  error_reporting(E_ALL);
    include_once 'message_manager_interface.php';

  class messenger implements Message_Manager_Interface{
    public function execute(){
      include 'connection.php';
      $query  = "SELECT email FROM user";
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_row($result)){
        echo "Email : {$row[0]}  ,  ";
      }
    }
  }
?>
