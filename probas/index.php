<?php
session_start();

if(!isset($_SESSION["cont"])){
  $_SESSION["cont"] = 0;
}else {
  $_SESSION["cont"]++;
}
echo $_SESSION["cont"];

$value = "Javi";

setcookie("name", $value, time()+3600);

echo $_COOKIE["name"];

 ?>
