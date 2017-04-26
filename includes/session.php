<?php
  session_start();

  function message(){
    if(isset($_SESSION["message_login"])){
      $out = htmlentities($_SESSION["message_login"]);

      $_SESSION["message_login"] = null;
      return $out;
    }
  }

  function messageCarer(){
    if(isset($_SESSION["message_carer"])){
      $out = htmlentities($_SESSION["message_carer"]);

      $_SESSION["message_carer"] = null;
      return $out;
    }
  }

  function messageClient(){
    if(isset($_SESSION["message_client"])){
      $out = htmlentities($_SESSION["message_client"]);

      $_SESSION["message_client"] = null;
      return $out;
    }
  }

  function messageVisit(){
    if(isset($_SESSION["message_visit"])){
      $out = htmlentities($_SESSION["message_visit"]);

      $_SESSION["message_visit"] = null;
      return $out;
    }
  }

  function messageEraseVisit(){
    if(isset($_SESSION["message_visit_erased"])){
      $out = htmlentities($_SESSION["message_visit_erased"]);

      $_SESSION["message_visit_erased"] = null;
      return $out;
    }
  }

?>
