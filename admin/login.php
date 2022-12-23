<?php
  session_start();

  $name = $_POST['name'];
  $password = $_POST['password'];

  if($name == "admin" and $password == "123456") {
    $_SESSION['auth'] = true;
    include("book-list.php");
  } else {
    include("index.php?login=failed");
  }
?>
