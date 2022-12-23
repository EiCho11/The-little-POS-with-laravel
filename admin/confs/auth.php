<?php

  //$username = "admin";
 // $password = "admin"; 
  session_start();
  if(!isset($_SESSION['auth'])) {
    include("index.php");
  exit();
  }
?>