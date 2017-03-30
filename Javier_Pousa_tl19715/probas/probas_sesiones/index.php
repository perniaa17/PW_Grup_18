<!DOCTYPE HTML>
<h1>
<a href="index2.php">VES A 2</a>
</h1>


<?php
session_start();
//$_SESSION["newuser"] = 0;


//session_write_close();
//unset($_SESSION["newuser"]);


if(!isset($_SESSION["newuser"])){
  echo "No hi ha cap sessió";
}else {
  echo "Session state: ";
  echo $_SESSION["newuser"];
}

unset($_SESSION["newuser"]);

if(!isset($_SESSION["newuser"])){
  echo "No hi ha cap sessió";
}else {
  echo "Session state: ";
  echo $_SESSION["newuser"];
}

 ?>
