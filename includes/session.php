<?php
  session_start();

  function message(){
    if(isset($_SESSION["message"])){
      $out = htmlentities($_SESSION["message_login"]);

      $_SESSION["message_login"] = null;
      return $out;
    }
  }

?>
