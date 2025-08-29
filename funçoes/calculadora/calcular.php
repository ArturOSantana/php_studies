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
    if ($a == 0 || $b == 0) {
        return "Não pode dividir por zero!";
    } 
    else
        return "o resultado da divisão é: " . $a / $b;
    }
  

if($_POST['operation'] == null|| $_POST['operation'] == ""||$_POST['num1'] == null|| $_POST['num1'] == ""||$_POST['num2'] == null|| $_POST['num2'] == ""){
    echo "Selecione uma operação.";
}
elseif($_POST['operation'] == 'add'){
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