<?php

/* Operador Ternário */
$idade = 20;

$mensagem = ($idade >= 18) ? "Maior de Idade" : "Menor de Idade";

echo $mensagem;

echo "<hr>";


/* If Else If Else */
$nota = 7;

if($nota >= 9){
    echo "A, Excelente";
}else if($nota >= 7){
    echo "B, mas pode melhorar";
}else if($nota >= 5){
    echo "C, estude mais";
}else{
    echo "D - Reprovado";
}

echo "<hr>";


/* Switch Case */
$nota2 = 2;
switch($nota2){
    case ($nota2 >= 9):
        echo "A, Excelente";
        break;
    case ($nota2 >= 7):
        echo "B, mas pode melhorar";
        break;
    case ($nota2 >= 5):
        echo "C, estude mais";
        break;
    default:
        echo "D - Reprovado";
        break;
}

?>