<?php

$numeros = [];

while(count($numeros)<6){

    $novonumero= rand(1,60);

    if(!in_array($novonumero, $numeros)){
        $numeros[] = $novonumero;
    }
}


sort($numeros);
echo "<pre>";
print_r($numeros);
echo "<pre>";
echo "os numeros:";
foreach($numeros as $valor){

     echo " - ".$valor." ";
}






?> 
