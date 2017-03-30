<!DOCTYPE HTML>
<h1>
<a href="index.php">VES A 1</a>
</h1>


<?php
session_start();
//$_SESSION["newuser"] = "javi";


//session_write_close()
//unset($_SESSION["newuser"]);


if(!isset($_SESSION["newuser"])){
  echo "No hi ha cap sessió";
}else {
  echo "Session state: ";
  echo $_SESSION["newuser"];
}

 ?>
