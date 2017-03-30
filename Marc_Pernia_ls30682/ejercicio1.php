<?php
    if($argc != 2){
        exit(1);
    }
    $num = $argv[1];
    for ($i = 1; $i <= 10; $i++){
        $result = $num * $i;
        echo $result;
        echo "\n";
    }