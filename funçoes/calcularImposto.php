<?php




function calcularImposto($salario) {
    if ($salario <= 1903.98) {
        return "isento";
    } else if ($salario < 1903.98 && $salario >= 2826.65 ) { 
        $imposto = ($salario * 7.5) / 100;
        return $imposto;
    } else if ($salario < 2826.65 && $salario >= 3751.05 ) {
        $imposto = ($salario * 15) / 100;
        return $imposto;
    } else if ($salario < 3751.05 && $salario >= 4664.68 ) {
        $imposto = ($salario * 22.5) / 100;
        return $imposto;
    } else {
        $imposto = ($salario * 27.5) / 100;
        return $imposto;
    }
}


echo calcularImposto(3000);



?>