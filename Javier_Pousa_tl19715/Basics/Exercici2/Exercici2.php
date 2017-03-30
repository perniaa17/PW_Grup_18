<?php

if ($argc != 4){
  echo "\nUso: php exercice2.php [number1] [number2] [operation]\n\n
        Possible operations: suma, resta, multiplica, divideix.\n\n";
  exit(1);
}

$num1=$argv[1];
$num2=$argv[2];
$operation=$argv[3];

if ($operation == 'suma'){
  $result = $num1 + $num2;
  echo "$num1 + $num2 = $result";
}

if ($operation == 'resta'){
  $result = $num1 - $num2;
  echo "$num1 - $num2 = $result";
}

if ($operation == 'multiplica'){
  $result = $num1 * $num2;
  echo "$num1 x $num2 = $result";
}

if ($operation == 'divideix'){
  $result = $num1 / $num2;
  echo "$num1 / $num2 = $result";
}

?>
