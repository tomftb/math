<?php

declare(strict_types=1);

function fibonacci(array $argv = []):void{

    $calc = 0;
    $resultList = [
        0 => 0
        ,1 => 1
    ];

    foreach($argv as $num => $arg){
        if($num === 0){
            continue;
        }
        $calc = intval($arg);
        break;
    }

    if($calc<1){
        echo 0;
        return;
    }

    if($calc === 1){
        echo 0;
        return;
    }

    if($calc<2){
        echo 1;
        return;
    }

    for($i=2;$i<$calc;$i++){
        $resultList[$i] = $resultList[$i-1] + $resultList[$i-2];
    }
    echo end($resultList);
}

try{
    echo fibonacci($argv);
}
catch(\Exception $e){
    echo $e->getMessage();
}
