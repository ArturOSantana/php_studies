<?php 


function somar($a, $b) {
    return "o resultado da soma é: " . $a + $b;
}
function subtrair($a, $b) {
    echo "o resultado da subtração é: " . $a - $b;
    
}
function multiplicar($a, $b) {
    $resultado = $a * $b;

    return "o resultado da multiplicação é: " . $resultado;
}
function dividir($a, $b) {
    if ($b != 0) {
        return "o resultado da divisão é: " . $a / $b;
    } else {
        return "Erro: Divisão por zero!";
    }
}   


if($_POST['operation'] == 'add'){
    echo somar($_POST['num1'], $_POST['num2']);
} elseif($_POST['operation'] == 'subtract'){
    echo subtrair($_POST['num1'], $_POST['num2']);
} elseif($_POST['operation'] == 'multiply'){
    echo multiplicar($_POST['num1'], $_POST['num2']);
} elseif($_POST['operation'] == 'divide'){
    echo dividir($_POST['num1'], $_POST['num2']);
} else {
    echo "Operação inválida.";
}





?>