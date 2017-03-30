<?php

if ($argc != 2){
  echo "\nUso: php exercice_1.php [number]\n\n";
  exit(1);
}
$file = __DIR__ ."/todolist.txt";
$content = file_get_contents($file);
$task=$argv[1];
$content .= $task."\n";
file_put_contents($file, $content);

?>