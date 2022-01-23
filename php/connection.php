<?php $connection=mysqli_connect("localhost","root","","shop");
  if (!$connection) {
  	die("ERROR 404, There is no connection " .mysqli_connect_error());
  } ?>