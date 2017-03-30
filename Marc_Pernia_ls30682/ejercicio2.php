<?php
    if ($argc != 4){
        exit(1);
    }

    echo "Opciones:\n1- Sumar\n2- Restar\n3- Dividir\n4- Multiplicar\n\n";

    $num1 = $argv[1];
    $num2 = $argv[2];
    $option = $argv[3];

    if($option > 4 || $option < 1){
        echo "No existe esa opcion";
        exit(1);
    }

    if($option == 1){
        $result = $num1 + $num2;
        echo $result;
    }

    if($option == 2){
        $result = $num1 - $num2;
        echo $result;
    }

    if($option == 3){
        $result = $num1 / $num2;
        echo $result;
    }

    if($option == 4){
        $result = $num1 * $num2;
        echo $result;
    }