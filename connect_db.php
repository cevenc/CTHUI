<?php

$con = mysql_connect("localhost:3306","root","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("townhui", $con);

?>
