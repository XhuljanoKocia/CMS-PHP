<?php ob_start(); ?>
<?php
  // This is a more secure way to connect to the database
  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "";
  $db['db_name'] = "cms";

  foreach($db as $key => $value) {
    define(strtoupper($key), $value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // if($connection) {
  //   echo "We are connected!";
  // }

  // This is a simple way to connect to the database
  // $connection = mysqli_connect('localhost','root','','cms');

  // if($connection) {
  //   echo "We are connected!";
  // }
?>