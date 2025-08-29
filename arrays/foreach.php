<?php

$funcionarios = array(
    array('nome'=>'Ana', 'idade'=>20, 'cargo'=>'Analista', 'salario'=> 3000),
    array('nome'=>'Beatriz', 'idade'=>25, 'cargo'=>'Desenvolvedora', 'salario'=> 5000),
    array('nome'=>'Carla', 'idade'=>30, 'cargo'=>'Gerente','salario'=>8000),
    array('nome'=>'Daniela', 'idade'=>35, 'cargo'=>'Diretora','salario'=> 15000),
    array('nome'=>'Eliana', 'idade'=>40, 'cargo'=>'Presidente','salario'=> 25000) 
);
echo'<pre>';
print_r($funcionarios);
echo'<pre>';
echo "<pre>";

foreach($funcionarios as $nome => $funcionario){
   foreach($funcionario as $ix2 => $valor){
        echo "<b>$ix2</b>: $valor <br>";
        
    }
           echo "<hr>";
    }
    echo "<hr>";










?>