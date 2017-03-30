<?php

if ($argc != 2){
  echo "\nUso: php remove_task.php [task to remove]\n\n";
  exit(1);
}
$taskToRemove = $argv[1];
$file = __DIR__ ."/todolist.txt";
$content = file_get_contents($file);
$tasks = explode("\n", $content);

foreach ($tasks as $key => $task) {
    if ($task == $taskToRemove){
    unset($tasks[$key]);
    echo "\nhola\n";
    $completadas = file_get_contents(__DIR__ ."/donelist.txt");
    $completadas .= $task."\n";
    file_put_contents(__DIR__ ."/donelist.txt", $completadas);
  }
}
$updatedTasks = implode("\n", $tasks);
file_put_contents($file, $updatedTasks);

 ?>
