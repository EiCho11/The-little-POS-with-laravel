<?php
  include("confs/config.php");

  $id = $_GET['id'];
  $sql = "DELETE FROM categories WHERE id = $id";
  mysql_query($sql);

  include("cat-list.php");
?>
