<?php

if ($argc < 2){
  echo "\nUso: php exercice4.php [frase]\n\n";
  exit(1);
}

$operation=$argv[1];
$words=array_slice($argv,1);
$totalWords = sizeof($words);
$counter = 0;

echo "\nTotal paraules : $totalWords\n";

foreach ($words as $key => $word) {

  if(array_key_exists($key, $words)){
    $counter++;
  }
  echo "\nla palabra $word aparece $counter veces.\n";
  $counter = 0;
}
?>
