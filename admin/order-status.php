<?php
  include("confs/config.php");
  $id = $_GET['id'];
  $status = $_GET['status'];

  mysql_query("UPDATE orders SET status=$status, modified_date=now() WHERE id=$id");
  include("orders.php");
?>