<?php

if ($argc < 4){
  echo "\nUso: php exercice3.php [operation] [number1] [number2] [number3]...\n\n
        Possible operations: suma, resta, multiplica, divideix.\n\n";
  exit(1);
}

$operation=$argv[1];
$numbers=array_slice($argv,2);
$acum = 0;

if ($operation == "suma"){
  $acum=0;
  foreach ($numbers as $key => $number) {
    $acum += $number;
  }
  echo "\nEl resultado es: $acum\n\n";
}

if ($operation == "resta"){
  $acum = $numbers[0];
  foreach ($numbers as $key => $number) {
    if($key != 0){
      $acum -= $number;
    }
  }
    echo "\nEl resultado es: $acum\n\n";
}

if ($operation == "multiplica"){
  $acum = $numbers[0];
  foreach ($numbers as $key => $number) {
    if($key != 0){
      $acum *= $number;
    }
  }
    echo "\nEl resultado es: $acum\n\n";
}

if ($operation == "divideix"){
  $acum = $numbers[0];
  foreach ($numbers as $key => $number) {
    if($key != 0){
      $acum /= $number;
    }
  }
    echo "\nEl resultado es: $acum\n\n";
}


?>
