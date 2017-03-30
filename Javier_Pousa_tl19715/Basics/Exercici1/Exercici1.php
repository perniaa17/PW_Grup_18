<?php

//echo "$argc[1]";

if ($argc != 2){
  echo "\nUso: php exercice_1.php [number]\n\n";
  exit(1);
}

$num=$argv[1];

function multiplica($num){
  for($i=0; $i<=10; $i++){
    $result=$i*$num;
    echo "$num x $i = $result\n";
  }
}

multiplica($num);

?>
