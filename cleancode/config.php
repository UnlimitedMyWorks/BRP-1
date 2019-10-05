<?php
  $username="root";
  $password="";
  $dbname="dummy_db";
  $mysqli = new mysqli("localhost",$username,$password,$dbname);
  if ($mysqli->connect_errno)
  {
    echo "Failed to connect to MySQL: (" .$mysqli->connect_errno. ")" .$mysqli->connect_error;
  }
 ?>
