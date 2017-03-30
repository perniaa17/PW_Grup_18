<?php

$file = __DIR__ ."/todolist.txt";
$content = file_get_contents($file);
echo "$content";

 ?>
